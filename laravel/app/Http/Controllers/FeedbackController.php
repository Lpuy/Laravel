<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    protected function submit(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => ['required'],
            'text' => ['required'],
            'email' => ['required_without:number'],
            'number' => ['required_without:email'],
        ]);

       Feedback::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'number' => $request['number'],
            'text' => $request['text']
        ]);
        return redirect()->route('home')->with('success', 'Дякуємо за повідомлення, ми відповімо Вам на номер телефону або емеіл');
    }
}
