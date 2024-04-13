<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('title', 'like', "%$query%")->get();
        return view('welcome', compact('books'));
    }
}
