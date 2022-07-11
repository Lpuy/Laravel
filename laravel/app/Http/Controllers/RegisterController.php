<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegisterForm(): View
    {
        return view('register');
    }

    public function submitRegisterForm(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        /**
         * Підтягнення телефона до формату +380123456789
         */
        if (strlen($request['numberPhone']) < 11) {
            $request = $this->checkTypeNumber($request);
        }
        $request->validate([
            'numberPhone' => ['required', 'unique:users,number'],
            'password' => ['required', 'between:8,20', 'confirmed'],
        ]);
        if ($request['email']) {
            $request->validate([
                'email' => 'unique:users,email'
            ]);
        }
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'number' => $request['numberPhone'],
            'password' => bcrypt($request['password']),
            'remember_token' => $request['_token']
        ]);
        if ($user) {
            auth('web')->login($user);
        }
        return redirect()->route('home')->with('success', 'Ви успішно зареєструвались');
    }

    protected function checkTypeNumber($request)
    {
        $request['numberPhone'] = '+38' . $request['numberPhone'];
        return $request;
    }
}
