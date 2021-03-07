<?php

use Illuminate\Support\Facades\Route;

//universal can be a guests homepage
Route::get('/', function () {
    return view('welcome');
});


//user-side or registered user
Route::get('/user', function () {
    return view('users/welcomeUser');
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

Route::get('/forgot-password', function () {
    return view('forgotPsswrd');
}); 



//Admin-side
Route::get('/promotion', function () {
    return view('admin/promotion');
}); 

Route::get('/admin-order', function () {
    return view('admin/adminOrder');
}); 

Route::get('/add-product', function () {
    return view('admin/addProduct');
}); 

Route::get('/add-category', function () {
    return view('admin/addCategory');
}); 

Route::get('/edit-category', function () {
    return view('admin/editCategory');
}); 

Route::get('/edit-product', function () {
    return view('admin/editproduct');
}); 

Route::get('/edit-order', function () {
    return view('admin/editOrders');
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
