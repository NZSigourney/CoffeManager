<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact(){
        return view('navbar.contact');
    }

    public function getAbout(){
        return view('navbar.about');
    }
}
