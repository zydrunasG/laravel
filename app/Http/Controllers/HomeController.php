<?php

namespace App\Http\Controllers;
use App\Court;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showWelcome()
    {
        $newest_courts = Court::orderBy('id', 'desc')->take(10)->get();
        return view('home', compact('newest_courts'));
    }
}
