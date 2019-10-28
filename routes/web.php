<?php
//main site
Route::get('/', function () {
    return view('site');
});
//collections
//product

// Auth::routes();
// Dashboard
Route::get('/auth', 'DashboardController@index')->name('home');
//login
Route::get('/auth/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/auth/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/auth/{{id}}', 'Auth\LoginController@showLoginForm')->name('account_setting');
//orders
Route::get('/auth/orders', function () {
    return view('dashboard.orders.main');
})->name('orders');// all orders table
Route::get('/auth/orders/show', function () {
    return view('dashboard.orders.show');
})->name('order_show');// all order info
Route::get('/auth/checkouts', function () {
    return view('dashboard.orders.checkout');
})->name('checkouts'); //checkouts

//products
Route::get('/auth/products', function () {
    return view('dashboard.products.main');
})->name('products'); // all products table

Route::get('/auth/products/new', function () {
    return view('dashboard.products.create');
})->name('create_product'); //create new product

Route::get('/auth/products/show', function () {
    return view('dashboard.products.show');
})->name('show_product'); // show product info.

//collections
Route::get('/auth/collections', function () {
    return view('dashboard.products.collections.main');
})->name('collections'); // all collections table

Route::get('/auth/collections/new', function () {
    return view('dashboard.products.collections.create');
})->name('create_collection'); //create new collections

Route::get('/auth/collections/show', function () {
    return view('dashboard.products.collections.show');
})->name('show_collection'); // show collection info.

//admins
Route::get('/auth/admins', function () {
    return view('dashboard.users.admins.main');
})->name('admins'); // all adims table

Route::get('/auth/admins/new', function () {
    return view('dashboard.users.admins.create');
})->name('create_admin'); //create new admin

Route::get('/auth/admins/show', function () {
    return view('dashboard.users.admins.show');
})->name('show_admin'); // show admin info.

//customers
Route::get('/auth/customers', function () {
    return view('dashboard.users.customers.main');
})->name('customers'); // all customers table

Route::get('/auth/customers/new', function () {
    return view('dashboard.users.customers.create');
})->name('create_customer'); //create new customers

Route::get('/auth/customers/show', function () {
    return view('dashboard.users.customers.show');
})->name('show_customer'); // show customers info.

//analytics
Route::get('/auth/analytics', function () {
    return view('dashboard.analytics');
})->name('analytics');
