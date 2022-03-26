<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
}
