<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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

//Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
//Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
//Route::get('admin/categories/index', [CategoryController::class, 'index'])->name('admin.categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('gallery.categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/edit/categories/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::post('/update/categories', [CategoryController::class, 'UpdateCategory'])->name('update.category');
Route::get('/delete/categories/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');

Route::get('admin/galleries/create', [GalleryController::class, 'create'])->name('admin.galleries.create');
//Route::post('admin/galleries/store', [GalleryController::class, 'store'])->name('admin.galleries.store');
Route::get('admin/galleries/index', [GalleryController::class, 'index'])->name('admin.galleries.index');

Route::get('admin/images/create', [ImageController::class, 'create'])->name('admin.images.create');
Route::post('admin/images/store', [ImageController::class, 'store'])->name('admin.images.store');
Route::get('admin/images/index', [ImageController::class, 'index'])->name('admin.images.index');

Route::get('/members/create', [MembersController::class, 'create'])->name('members.create');
Route::post('/members', [MembersController::class, 'store'])->name('members.store');
Route::get('/members', [MembersController::class, 'index'])->name('members.index');
Route::get('/members/{id}', [MembersController::class, 'EditMembers'])->name('edit.members');
Route::post('/update/members', [MembersController::class, 'UpdateMembers'])->name('update.members');

Route::get('/prayers/create', [PrayersController::class, 'create'])->name('prayers.create');
Route::post('/prayers', [PrayersController::class, 'store'])->name('prayers.store');
Route::get('/prayers', [PrayersController::class, 'index'])->name('prayers.index');
Route::get('/prayers/{id}', [PrayersController::class, 'EditPrayers'])->name('edit.prayers');
Route::post('/update/prayers', [PrayersController::class, 'UpdatePrayers'])->name('update.prayers');
Route::get('/delete/prayers/{id}', [PrayersController::class, 'DeletePrayers'])->name('delete.prayers');

Route::get('/series/create', [SeriesController::class, 'create'])->name('series.create');
Route::post('/series', [SeriesController::class, 'store'])->name('series.store');
Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/{id}', [SeriesController::class, 'EditSeries'])->name('edit.series');
Route::post('/update/series', [SeriesController::class, 'UpdateSeries'])->name('update.series');
Route::get('/delete/series/{id}', [SeriesController::class, 'DeleteSeries'])->name('delete.series');

Route::get('/sermons/create', [SermonsController::class, 'create'])->name('sermons.create');
Route::post('/sermons', [SermonsController::class, 'store'])->name('sermons.store');
Route::get('/sermons', [SermonsController::class, 'index'])->name('sermons.index');
Route::get('/sermons/{id}', [SermonsController::class, 'EditSermons'])->name('edit.sermons');
Route::post('/update/sermons', [SermonsController::class, 'UpdateSermons'])->name('update.sermons');
Route::get('/delete/sermons/{id}', [SermonsController::class, 'DeleteSermons'])->name('delete.sermons');

Route::get('/shorts/create', [ShortsController::class, 'create'])->name('shorts.create');
Route::post('/shorts', [ShortsController::class, 'store'])->name('shorts.store');
Route::get('/shorts', [ShortsController::class, 'index'])->name('shorts.index');
Route::get('/shorts/{id}', [ShortsController::class, 'EditShorts'])->name('edit.shorts');
Route::post('/update/shorts', [ShortsController::class, 'UpdateShorts'])->name('update.shorts');
Route::get('/delete/shorts/{id}', [ShortsController::class, 'DeleteShorts'])->name('delete.shorts');

Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticlesController::class, 'EditArticles'])->name('edit.articles');
Route::post('/update/articles', [ArticlesController::class, 'UpdateArticles'])->name('update.articles');
Route::get('/delete/articles/{id}', [ArticlesController::class, 'DeleteArticles'])->name('delete.articles');

Route::get('/collections/create', [CollectionsController::class, 'create'])->name('collections.create');
Route::post('/collections', [CollectionsController::class, 'store'])->name('collections.store');
Route::get('/collections', [CollectionsController::class, 'index'])->name('collections.index');
Route::get('/collections/{id}', [CollectionsController::class, 'EditCollections'])->name('edit.collections');
Route::post('/update/collections', [CollectionsController::class, 'UpdateCollections'])->name('update.collections');
Route::get('/delete/collections/{id}', [CollectionsController::class, 'DeleteCollections'])->name('delete.collections');

Route::get('/worships/create', [WorshipsController::class, 'create'])->name('worships.create');
Route::post('/worships', [WorshipsController::class, 'store'])->name('worships.store');
Route::get('/worships', [WorshipsController::class, 'index'])->name('worships.index');
Route::get('/worships/{id}', [WorshipsController::class, 'EditWorships'])->name('edit.worships');
Route::post('/update/worships', [WorshipsController::class, 'UpdateWorships'])->name('update.worships');
Route::get('/delete/worships/{id}', [WorshipsController::class, 'DeleteWorships'])->name('delete.worships');

Route::get('/testimonies/create', [TestimoniesController::class, 'create'])->name('testimonies.create');
Route::post('/testimonies', [TestimoniesController::class, 'store'])->name('testimonies.store');
Route::get('/testimonies', [TestimoniesController::class, 'index'])->name('testimonies.index');
Route::get('/testimonies/{id}', [TestimoniesController::class, 'EditTestimonies'])->name('edit.testimonies');
Route::post('/update/testimonies', [TestimoniesController::class, 'UpdateTestimonies'])->name('update.testimonies');
Route::get('/delete/testimonies/{id}', [TestimoniesController::class, 'DeleteTestimonies'])->name('delete.testimonies');

Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventsController::class, 'EditEvents'])->name('edit.events');
Route::post('/update/events', [EventsController::class, 'UpdateEvents'])->name('update.events');
Route::get('/delete/events/{id}', [EventsController::class, 'DeleteEvents'])->name('delete.events');
