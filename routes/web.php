<?php

use Illuminate\Support\Facades\Route;

//universal can be a guests homepage
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contactUs');
}); 

Route::get('/confirm-account-user', function () {
    return view('confirmAcc');
}); 

Route::get('/forgot-password', function () {
    return view('forgotPsswrd');
}); 

Route::get('/guest-login', function () {
    return view('loginGuest');
}); 

Route::get('/register', function () {
    return view('register');
}); 

Route::get('/login', function () {
    return view('login');
}); 



//user-side or registered user
Route::get('/user', function () {
    return view('users/welcomeUser');
});

Route::get('/menu-user', function () {
    return view('users/menu');
});

Route::get('/cart-user', function () {
    return view('users/cart');
});
//may revise //belongs to order button
Route::get('/order-status-user', function () {
    return view('users/orderstats');
}); 

//may revise //belongs to order button
Route::get('/track-order-user', function () {
    return view('users/trackOrder');
}); 

Route::get('/account-setting-user', function () {
    return view('users/accountSetting');
}); 

Route::get('/checkout-user', function () {
    return view('users/checkout');
}); 

Route::get('/order-details-user', function () {
    return view('users/orderDetails');
}); 




//guest user side

Route::get('/menu', function () {
    return view('guest/menu');
});

Route::get('/cart', function () {
    return view('guest/cart');
});


Route::get('/checkout', function () {
    return view('guest/checkout');
}); 

Route::get('/order-details', function () {
    return view('guest/orderDetails');
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
