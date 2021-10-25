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
        return view('home.index')->with(['title' => '']);
    }
}
