<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showIndex()
    {
        return view('contact', array('meta_title' => 'Kontaktai'));
    }
}
