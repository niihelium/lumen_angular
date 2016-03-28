<?php

//use Illuminate\Support\Facades\Route as Route;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$app->get('/', function () use ($app) {
    return view('index');
});

$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers'], function ($app) {

    $app->get('books', 'BooksController@index');

    $app->get('books/{id}', 'BooksController@getbook');

    $app->post('books', 'BooksController@createBook');

    $app->put('books/{id}', 'BooksController@updateBook');

    $app->delete('books/{id}', 'BooksController@deleteBook');
});


$app->get('/{*}', function()
{
    return view('index');
});
//})->where("path", ".+");
