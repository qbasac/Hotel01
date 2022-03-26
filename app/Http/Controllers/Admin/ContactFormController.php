<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
  public function index()
  {
    $contact_forms = ContactForm::latest()->paginate(10);
    return view('backend.contact.contact-form.index', compact('contact_forms'));
  }

  public function destroy($id)
  {
    $message = ContactForm::find($id);
    $message->delete();
    return redirect()->route('admin.contact-form.index')->with('deleted', 'Eliminado');
  }
}
