<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $name = 'HOME';
    $menus = ['home', 'contacts', 'about-us'];
    return view('home', compact('name', 'menus'));
});

Route::get('/home', function () {
    $name = 'HOME';
    $menus = ['home', 'contacts', 'about-us'];
    return view('home', compact('name', 'menus'));
});

Route::get('/contacts', function () {
    $name = 'CONTACTS';
    $menus = ['home', 'contacts', 'about-us'];
    return view('contacts', compact('name', 'menus'));
});
Route::get('/about-us', function () {
    $name = 'ABOUT-US';
    $menus = ['home', 'contacts', 'about-us'];
    return view('contacts', compact('name', 'menus'));
});
