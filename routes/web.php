<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/portfolio');
});

Route::get('/comingsoon', function () {
    return view('comingsoon');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});