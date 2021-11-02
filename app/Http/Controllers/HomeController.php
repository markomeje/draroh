<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Defining the Home page
     */
    public function index()
    {
        return view('home.index')->with(['title' => 'Dr. Chukwuemeka Aroh is a quintessential speaker, public intellectual, political scientist, social activist and politician, who has always had a passion for a better society.']);
    }
    
}
