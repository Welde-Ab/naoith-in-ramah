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
    Route::get('/about_menu/believe', 'believe') -> name('believe');
    Route::get('/about_menu/members', 'members') -> name('members');
    Route::get('/about_menu/testimonies', 'testimonies') -> name('testimonies');
    Route::get('/gallery', 'gallery') -> name('gallery');

    Route::get('/gallery_categories', 'gallery_categories') -> name('gallery_categories');

    Route::get('/worships-songs', 'worships') -> name('worships');
    Route::get('/contact', 'contact') -> name('contact');
    Route::get('/resources_menu/prayers', 'prayers') -> name('prayers');
    Route::get('/resources_menu/events', 'events') -> name('events');
    Route::get('/resources_menu/testimonies', 'testimonies') -> name('testimonies');
    Route::get('/resources_menu/worships', 'worships') -> name('worships');
    Route::get('/resources_menu/teachings/articles', 'articles') -> name('articles');
    Route::get('/resources_menu/teachings/others', 'others') -> name('others');
    Route::get('/resources_menu/teachings/series', 'series') -> name('series');
    Route::get('/resources_menu/teachings/sermons', 'articles') -> name('sermons');
    Route::get('/resources_menu/teachings/shorts', 'shorts') -> name('shorts');
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
