<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //OK
    public function index()
    {
      $pageLimit = 10;
      $Books = Book::paginate($pageLimit);

      return response()->json($Books);

    }

    //OK
    public function getBook($id)
    {
        $Book = Book::find($id);

        return response()->json($Book);
    }

    //OK
    public function createBook(Request $request)
    {
        $Book = Book::create($request->all());
        //return response()->json($request->all());
        return response()->json($Book);
    }

    //OK
    public function deleteBook($id)
    {
        $Book = Book::find($id);
        $Book->delete();

        return response()->json(Book::all());
    }

    public function updateBook(Request $request, $id)
    {
        $Book = Book::find($id);
        $Book->title = $request->input('title');
        $Book->author = $request->input('author');
        $Book->save();

        return response()->json($Book);
    }
}
