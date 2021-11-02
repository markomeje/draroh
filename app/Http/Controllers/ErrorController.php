<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * Defining the Generic error Page
     * @code 404
     */
    public function error()
    {
        return view('layouts.error')->with(['title' => '404 Page Not Found']);
    }
}
