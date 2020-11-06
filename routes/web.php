<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
use Illuminate\Support\Str;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return Str::random(40);
});

$router->get('books', 'BooksController@index');

$router->get('books/{id}', 'BooksController@cariId');

$router->post('books', 'BooksController@store');

$router->put('books/{id}', 'BooksController@update');

$router->delete('books/{id}', 'BooksController@destroy');

$router->get('authors', 'AuthorsController@index');

$router->get('authors/{id}', 'AuthorsController@cariId');

$router->post('authors', 'AuthorsController@tambahAuth');

$router->put('authors/{id}', 'AuthorsController@updateAuth');

$router->delete('authors/{id}', 'AuthorsController@destroyAuth');