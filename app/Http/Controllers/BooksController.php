<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Utils\Utils;

class BooksController extends Controller
{
    public function index()
    {
        $pageLimit = Utils::processPerPage();
        $Books = Utils::processSort($pageLimit);

        return response()->json($Books);
    }

    public function getBook($id)
    {
        $Book = Book::find($id);

        return response()->json($Book);
    }

    public function createBook(Request $request)
    {
        Utils::validateBook($request, $this);
        $Book = Book::create($request->all());

        return response()->json($Book);
    }

    public function deleteBook($id)
    {
        $Book = Book::find($id);
        $Book->delete();

        return response()->json(Book::all());
    }

    public function updateBook(Request $request, $id)
    {
        Utils::validateBook($request, $this);
        $Book = Book::find($id);
        $Book->title = $request->input('title');
        $Book->author = $request->input('author');
        $Book->save();

        return response()->json($Book);
    }
}
