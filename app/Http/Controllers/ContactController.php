<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Contact;
class ContactController extends Controller
{
    public function show(){
        $contact = Contact::with('student')->get();
        return $contact;
    }
}
