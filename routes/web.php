<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('workplace', [MainController::class, 'workplace'])->name('workplace');
Route::get('contact', [MainController::class, 'contact'])->name('contact');


Route::get('de', [MainController::class, 'de'])->name('de');
Route::get('en', [MainController::class, 'en'])->name('en');
Route::get('pl', [MainController::class, 'pl'])->name('pl');

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::get('gallery/add', [AdminController::class, 'galleryAdd'])->name('gallery.add');
    Route::get('gallery/{image}/delete', [AdminController::class, 'galleryDelete'])->name('gallery.delete');
    Route::get('gallery/{image}/edit', [AdminController::class, 'galleryEdit'])->name('gallery.edit');
    Route::post('gallery/{image}', [AdminController::class, 'galleryUpdate'])->name('gallery.update');
    Route::post('gallery/create', [AdminController::class, 'galleryCreate'])->name('gallery.create');
    Route::get('gallery/create', [AdminController::class, 'galleryCreateGet'])->name('gallery.create.get');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
