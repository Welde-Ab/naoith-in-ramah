<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\gallery\CategoryController;
use App\Http\Controllers\gallery\GalleryController;
use App\Http\Controllers\gallery\ImageController;

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
    Route::get('/gallery/category/{id}','category')->name('gallery.category');
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
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
//    Route::get('/', 'HomeMain')->name('home');
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
        //   Route::get('/contact', 'ContactMethod')->name('contact.page');
    });
});
//home slide all route
Route::controller(GalleryController::class)->group(function () {
//    Route::get('/home/gallery/categories', 'index')->name('home.gallery');
//    Route::post('/update/gallery', 'UpdateGallery')->name('update.gallery');
//    Route::get('/home/gallery', 'index')->name('home.gallery');
//    Route::get('/home/gallery/create', 'create')->name('home.create');
//    Route::post('/home/gallery/store', 'store')->name('galleries.store');
//    Route::get('/home/gallery', 'index')->name('home.gallery');
//    Route::get('/home/gallery', 'index')->name('home.gallery');
//    Route::get('/gallery/page', 'HomeGallery')->name('gallery.page');
//    Route::get('/gallery/multi/image', 'galleryMultiImage')->name('gallery.multi.image');
//
//    Route::post('/store/multi/image', 'StoreGalleryMulti')->name('store.multi.image');
//    Route::get('/all/multi/image', 'AllMultiImage')->name('all.gallery.image');


});

//Route::resource('gallery-categories', GalleryCategoryController::class)->only(['index', 'create', 'store']);

//about all route
//Route::controller(AboutController::class)->group(function () {

//    Route::get('/gallery/page', 'AboutPage')->name('gallery.page');
////    Route::post('/update/about', 'UpdateAbout')->name('update.about');
////   Route::get('/gallery/', 'Home')->name('home.about');
//
//    Route::get('/gallery/multi/image', 'galleryMultiImage')->name('gallery.multi.image');
//
//    Route::post('/store/multi/image', 'UpdateGallery')->name('store.multi.image');
//    Route::get('/all/multi/image', 'AllMultiImage')->name('all.gallery.image');
//    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
//    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
//    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
//});

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');

Route::get('/images/create', [ImageController::class, 'create'])->name('images.create');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');

