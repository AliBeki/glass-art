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
    return view('home');
})->name('home');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/workplace', function () {
    return view('workplace');
})->name('workplace');

Route::get('/workshop', function () {
    return view('workshop');
})->name('workshop');

Route::get('/contact', function () {
    return view('contact_me');
})->name('contact');

Route::get('contact-me', 'ContactController@getContact');
Route::post('contact-me', 'ContactController@saveContact');

