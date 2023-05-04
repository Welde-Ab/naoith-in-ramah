<?php

use App\Http\Controllers\FrontController;
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

//Route::get('/', function () {
//    return view('front_end.index');// Sub-directories are elaborted in .
//});

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index') -> name('home');
    Route::get('/about_menu/about', 'about') -> name('about');
    Route::get('/gallery', 'gallery') -> name('gallery');
    Route::get('/worships-songs', 'worships') -> name('worships');
    Route::get('/contact', 'contact') -> name('contact');
});

//Route::get('/about', function () {
//    return view('front_end.about');// Sub-directories are elaborted in .
//});
//
//Route::get('/contact', function () {
//    return view('front_end.contact');// Sub-directories are elaborted in .
//});
//
//Route::get('/gallery', function () {
//    return view('front_end.gallery');// Sub-directories are elaborted in .
//});
//
//Route::get('/worships-songs', function () {
//    return view('front_end.worships');// Sub-directories are elaborted in .
//});
//
//Route::get('/resources/worships-songs', function () {
//    return view('front_end.worships');// Sub-directories are elaborted in .
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
