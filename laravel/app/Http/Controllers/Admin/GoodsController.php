<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GoodsFormRequest;
use App\Models\Goods;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;

class GoodsController extends Controller
{
    private $app;

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $goods = Goods::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.goods.all_goods', [
            'goods' => $goods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GoodsFormRequest $request
     * @return RedirectResponse
     */
    public function store(GoodsFormRequest $request)
    {
// Dorobitu privyazki sub_categories
        Goods::create($request->validated());
        return redirect()->route('goods.create')->with('success', 'Товар добавлений');
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int
     * @return View
     */
    public function edit(int $id): View
    {
        $goods = Goods::findOrFail($id);
        return view('admin.goods.edit', [
            'goods' => $goods,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(GoodsFormRequest $request, int $id): RedirectResponse
    {
        $goods = Goods::findOrFail($id);
        $goods->update($request->validated());
        return redirect()->route('goods.index')->with('success', 'Товар змінено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return  RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        Goods::destroy($id);
        return redirect()->route('goods.index')->with('success', 'Товар видалений');
    }
}
