<?php

namespace App\Http\Controllers\Crud;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function read() {
        $contacts = Contact::orderBy('id','asc')->get();
        return view('dashboard.contacts_dashboard', compact('contacts'));
    }
}
