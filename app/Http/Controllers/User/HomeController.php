<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactInformation;
use App\Models\Servies;

class HomeController extends Controller
{
    public function index()
    {
        $servise = Servies::where('status', 1)->get();
        $contact = Contact::where('status', 1)->get();
        $contactInformation = ContactInformation::all();
        return view('homepage', compact('servise', 'contact', 'contactInformation'));
    }
}
