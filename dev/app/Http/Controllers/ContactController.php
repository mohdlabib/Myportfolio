<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::orderBy('id', 'desc')->get();
        return view('contacts.index', compact('messages'));
    }
}
