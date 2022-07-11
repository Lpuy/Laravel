<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function showLoginForm(): View
    {
        return view('login');
    }

    public function submitLoginForm(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'numberPhone' => ['required'],
            'password' => ['required']
        ]);
        /**
         * Підтягнення телефона до формату +380123456789
         */
        if (strlen($request['numberPhone']) < 11) {
            $request = $this->checkTypeNumber($request);
        }
        if (auth('web')->attempt(['number' => $request['numberPhone'], 'password' => $request['password']])) {
            return redirect()->route('home')->with('success', 'Ви успішно авторизувались');
        }
        return redirect(route('login'))->withErrors('Користувач не знайдений , або дані введені не вірно');
    }

    protected function checkTypeNumber($request)
    {
        $request['numberPhone'] = '+38' . $request['numberPhone'];
        return $request;
    }

    public function logout(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        auth('web')->logout();
        return redirect(route('home'));
    }
}
