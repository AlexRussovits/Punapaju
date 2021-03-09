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

    public function showContact($id) {
        $contact = Contact::find($id);
        if(!empty($contact)) {
            return view('dashboard.edit.contacts_edit', compact('contact'));
        }else{
            return abort('404');
        }
    }

    public function editContact($id, Request $request) {
        $contact = Contact::find($id);
        if(!empty($contact)) {
            $request->validate([
                'email'=> 'email|max:120|required',
                'name'=> 'max:120|required',
                'text'=> 'required',
            ]);
        }else {
            return abort('404');
        }
        if(($contact->fill($request->except(['_token'])))->save()){
            return redirect('/dashboard/contacts_dashboard')->with(['success_delivery'=>true]);
        }else{
            return abort('404');
        }
    }

    public function destroyContact($id) {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/dashboard/contacts_dashboard')->with(['success_delivery'=>true]);
    }
}
