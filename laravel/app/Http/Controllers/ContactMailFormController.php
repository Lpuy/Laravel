<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailContactFormRequest;
use App\Mail\MailChange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailFormController extends Controller
{
    public function showContactMailForm(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
    return view('mailContactForm');
    }

    public function submitContactMailForm(MailContactFormRequest $request)
    {
//     dd($request);
      Mail::to('woody271207@gmail.com')->send(new MailChange($request));

      return redirect(route('about'));
    }
}
