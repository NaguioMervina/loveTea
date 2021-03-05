<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/orderstats', function () {
    return view('orderstats');
}); 

Route::get('/trackorder', function () {
    return view('trackOrder');
}); 

Route::get('/accountsetting', function () {
    return view('accountSetting');
}); 

Route::get('/register', function () {
    return view('register');
}); 

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/admin', function () {
    return view('adminDashboard');
}); 

Route::get('/productcategory', function () {
    return view('product&category');
}); 
