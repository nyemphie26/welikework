<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('signin');
});
Route::get('/register', function () {
    return view('signup');
})->name('Sign Up');
Route::get('/dashboard', function () {
    return view('Auth.dashboard');
})->name('Dashboard');

// ------- Incoming
Route::get('/incoming', function () {
    return view('Auth.incoming.incoming');
})->name('Incoming Works');
Route::get('/edit-add-incoming', function () {
    return view('Auth.incoming.edit-add');
})->name('Incoming Works Edit Add');

// ------- Accepted
Route::get('/accepted', function () {
    return view('Auth.accepted.index');
})->name('Accepted Works');

// ------- Finished
Route::get('/finished', function () {
    return view('Auth.finished.index');
})->name('Finished Works');

// ------- Customers
Route::get('/customers', function () {
    return view('Auth.customers.index');
})->name('Customer List');

// ------- Employees
Route::get('/employees', function () {
    return view('Auth.employees.index');
})->name('Employee List');