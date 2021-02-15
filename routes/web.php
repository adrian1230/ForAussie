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
    return view('pages.home');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/new', function () {
    return view('pages.create');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

// Route::get('/test', function () {
//     return view('pages.test');
// });
