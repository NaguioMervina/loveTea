<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});