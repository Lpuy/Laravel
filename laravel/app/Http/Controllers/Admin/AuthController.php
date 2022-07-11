<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function adminLoginSubmit(Request $request)
    {
        $data = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if (auth( 'admin')->attempt($data)) {
            return redirect()->route('admin_home')->with('success', 'Adin успішно авторизувався');
        }
        return redirect(route('admin_login'))->withErrors('Користувач не знайдений , або дані введені не вірно');
    }
}
