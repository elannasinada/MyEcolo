<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/example-page', 'example-page');
Route::view('/example-auth', 'example-auth');
