<?php

Route::post('/books', 'BooksController@store');
// Route::patch('/books/{book}-{title}', 'BooksController@update');
// Route::delete('/books/{book}-{title}', 'BooksController@delete');
Route::patch('/books/{book}', 'BooksController@update');
Route::delete('/books/{book}', 'BooksController@delete');

Route::post('/author', 'AuthorsController@store');