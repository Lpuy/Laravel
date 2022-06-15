<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */

    public function submit(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Повідомлення надіслано успішно');
    }

    public function allData()
    {
        $contact = new Contact;
//        return view('messages', ['data' => $contact->orderBy('id', 'asc')->take(2)->get(),]);
//        return view('messages', ['data' => $contact->find(2),]);  ||||| one value , use echo id
        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id)
    {
        return view('one-messages', ['data' => Contact::find($id)]);
    }

    public function oneMessageUpdate($id)
    {
        return view('update-message', ['data' => Contact::find($id),]);
    }

    public function updateMessageSubmit($id, ContactRequest $request)
     {
         $contact = Contact::find($id);
         $contact->name = $request->input('name');
         $contact->email = $request->input('email');
         $contact->subject = $request->input('subject');
         $contact->message = $request->input('message');

         $contact->save();

         return redirect()->route('contact-id', $id)->with('success', 'Повідомлення обновлено успішно');
     }

     public function messageDelete($id)
     {
         Contact::find($id)->delete();

         return redirect()->route('contact-data')->with('Повідомлення видалено');
     }
}
