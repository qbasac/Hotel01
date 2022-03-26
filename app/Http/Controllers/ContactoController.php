<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactFormRequest;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
  public function construct()
  {
    $this->middleware('auth');
  }

  public function contact()
  {
    $contact = Contact::first();
    return view('frontend.contact', compact('contact'));
  }

  public function store(StoreContactFormRequest $request)
  {
    $contact_form = new ContactForm();
    $contact_form->name = $request->name;
    $contact_form->email = $request->email;
    $contact_form->subject = $request->subject;
    $contact_form->message = $request->message;

    $contact_form->save();
    return back()->with('created', 'vale');
  }

}
