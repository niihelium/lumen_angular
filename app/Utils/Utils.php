<?php

namespace App\Utils;

use App\Models\Book;

/**
 *
 */
class Utils
{
    public static function validateBook($req, $context)
    {
        $context->validate($req, [
      'author' => 'required|max:100',
      'title' => 'required|max:150',
      'year' => 'integer',
      'description' => 'required|max:2000', ]);
    }

    public static function processPerPage()
    {
        if (isset($_GET['perpage']) && (int) $_GET['perpage']) {
            return $pageLimit = (int) $_GET['perpage'];
        } else {
            return $pageLimit = 10;
        }
    }

    public static function processSort($limit)
    {
        if (isset($_GET['sort'])) {
            $params = explode(',', $_GET['sort']);
            return $Books = Book::orderBy($params[0], count($params) == 2 ? $params[1] : 'asc')->paginate($limit);
        } else {
            return $Books = Book::paginate($limit);
        }
    }
}
