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

Route::get('/order-status', function () {
    return view('orderstats');
}); 

Route::get('/track-order', function () {
    return view('trackOrder');
}); 

Route::get('/account-setting', function () {
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

Route::get('/product-category', function () {
    return view('product&category');
}); 

Route::get('/inventory-category', function () {
    return view('inventory-category');
}); 

Route::get('/promotion', function () {
    return view('promotion');
}); 

Route::get('/admin-order', function () {
    return view('adminOrder');
}); 

Route::get('/add-product', function () {
    return view('addProduct');
}); 

Route::get('/add-category', function () {
    return view('addCategory');
}); 

Route::get('/edit-category', function () {
    return view('editCategory');
}); 

Route::get('/edit-product', function () {
    return view('editproduct');
}); 

Route::get('/edit-order', function () {
    return view('editOrders');
}); 

Route::get('/confirm-account', function () {
    return view('confirmAcc');
}); 

Route::get('/contact-us', function () {
    return view('contactUs');
}); 

Route::get('/checkout', function () {
    return view('checkout');
}); 

Route::get('/order-details', function () {
    return view('orderDetails');
}); 