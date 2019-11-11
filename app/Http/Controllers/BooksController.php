<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function store(Request $request)
    {
        Book::create($this->validateRequest());
    }

    public function update(Book $book)
    {
        $book->update($this->validateRequest());
    }

    public function validateRequest()
    {
        return $validated_data = request()->validate([
            'title' => 'required',
            'author' => 'required'
        ]);
    }
}
