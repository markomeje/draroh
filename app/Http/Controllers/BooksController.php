<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Defining the Books Home Page
     */
    public function index()
    {
        return view('books.index')->with(['title' => '']);
    }

    /**
     * Download the book
     */
    public function download($id = 0)
    {}
}
