<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatedContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    $contact = Contact::first();
    return view('backend.contact.contact-information.index', compact('contact'));
  }

  public function edit($id)
  {
    $contact = Contact::whereId($id)->first();
    return view('backend.contact.contact-information.edit', compact('contact'));
  }

  public function update(UpdatedContactRequest $request, $id)
  {
    $contact = Contact::find($id);
    $contact->direction_map = $request->direction_map;
    $contact->direction = $request->direction;
    $contact->phone = $request->phone;
    $contact->email = $request->email;

    $contact->save();
    return redirect()->route('admin.contact.index')->with('updated', 'Registro actualizado exitósamente.');
  }
}
