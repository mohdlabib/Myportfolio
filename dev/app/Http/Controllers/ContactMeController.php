<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;
use Illuminate\Http\Request;

class ContactMeController extends Controller
{
    public function index()
    {
        $contact = ContactMe::orderBy('id', 'desc')->get();
        return view('contacts-me.index', compact('contact'));
    }
}
