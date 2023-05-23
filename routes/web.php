<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\gallery\CategoryController;
use App\Http\Controllers\gallery\GalleryController;
use App\Http\Controllers\gallery\ImageController;

use App\Http\Controllers\MembersController;
use App\Http\Controllers\PrayersController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\ShortController;
use App\Http\Controllers\TestimonyController;
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

Route::get('/categories/create', [CategoryController::class, 'create'])->name('gallery.categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/edit/categories/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::post('/update/categories', [CategoryController::class, 'UpdateCategory'])->name('update.category');
Route::get('/delete/categories/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');



Route::get('/galleries/create', [GalleryController::class, 'create'])->name('images.upload');
Route::post('/galleries', [GalleryController::class, 'StoreMultiImage'])->name('images.store');
Route::get('/galleries/all', [GalleryController::class, 'AllImages'])->name('all.images');
Route::Post('/update/images', [GalleryController::class, 'UpdateImage'])->name('update.image');
Route::get('/edit/image/{id}', [GalleryController::class, 'EditImage'])->name('edit.image');
Route::get('/delete/image/{id}', [GalleryController::class, 'DeleteImage'])->name('delete.image');

//testimonies
Route::get('/testimonies/create', [TestimonyController::class, 'create'])->name('create.testimony');
Route::post('/testimonies', [TestimonyController::class, 'StoreTestimony'])->name('testimony.store');
Route::get('/testimonies/all', [TestimonyController::class, 'AllTestimonies'])->name('all.testimonies');
Route::get('/edit/testimonies/{id}', [TestimonyController::class, 'EditTestimony'])->name('edit.testimony');
Route::post('/update/testimonies', [TestimonyController::class, 'UpdateTestimony'])->name('update.testimony');
Route::get('/delete/testimonies/{id}', [TestimonyController::class, 'DeleteTestimony'])->name('delete.testimony');

//articles
Route::get('/articles/create', [ArticleController::class, 'create'])->name('create.article');
Route::post('/articles', [ArticleController::class, 'StoreArticle'])->name('article.store');
Route::get('/articles/all', [ArticleController::class, 'AllArticles'])->name('all.articles');
Route::get('/edit/articles/{id}', [ArticleController::class, 'EditArticle'])->name('edit.article');
Route::post('/update/articles', [ArticleController::class, 'UpdateArticle'])->name('update.article');
Route::get('/delete/articles/{id}', [ArticleController::class, 'DeleteArticle'])->name('delete.article');
// shorts
Route::get('/shorts/create', [ShortController::class, 'create'])->name('create.short');
Route::post('/shorts', [ShortController::class, 'StoreShort'])->name('short.store');
Route::get('/shorts/all', [ShortController::class, 'AllShorts'])->name('all.shorts');
Route::get('/edit/shorts/{id}', [ShortController::class, 'EditShort'])->name('edit.short');
Route::post('/update/shorts', [ShortController::class, 'UpdateShort'])->name('update.short');
Route::get('/delete/shorts/{id}', [ShortController::class, 'DeleteShort'])->name('delete.short');

//sermons
Route::get('/sermons/create', [SermonController::class, 'create'])->name('create.sermon');
Route::post('/sermons', [SermonController::class, 'StoreSermon'])->name('sermon.store');
Route::get('/sermons/all', [SermonController::class, 'AllSermons'])->name('all.sermons');
Route::get('/edit/sermons/{id}', [SermonController::class, 'EditSermon'])->name('edit.sermon');
Route::post('/update/sermons', [SermonController::class, 'UpdateSermon'])->name('update.sermon');
Route::get('/delete/sermons/{id}', [SermonController::class, 'DeleteSermon'])->name('delete.sermon');
//series
Route::get('/series/create', [SeriesController::class, 'create'])->name('create.series');
Route::post('/series', [SeriesController::class, 'StoreSerie'])->name('series.store');
Route::get('/series/all', [SeriesController::class, 'AllSeries'])->name('all.series');
Route::get('/edit/series/{id}', [SeriesController::class, 'EditSerie'])->name('edit.series');
Route::post('/update/series', [SeriesController::class, 'UpdateSerie'])->name('update.series');
Route::get('/delete/series/{id}', [SeriesController::class, 'DeleteSerie'])->name('delete.series');
//prayer
Route::get('/prayers/create', [PrayersController::class, 'create'])->name('create.prayer');
Route::post('/prayers', [PrayersController::class, 'StorePrayer'])->name('prayer.store');
Route::get('/prayers/all', [PrayersController::class, 'AllPrayers'])->name('all.prayers');
Route::get('/edit/prayers/{id}', [PrayersController::class, 'EditPrayer'])->name('edit.prayer');
Route::post('/update/prayers', [PrayersController::class, 'UpdatePrayer'])->name('update.prayer');
Route::get('/delete/prayers/{id}', [PrayersController::class, 'DeletePrayer'])->name('delete.prayer');
//events
Route::get('/events/create', [EventsController::class, 'create'])->name('create.event');
Route::post('/events', [EventsController::class, 'StoreEvent'])->name('event.store');
Route::get('/events/all', [EventsController::class, 'AllEvents'])->name('all.events');
Route::get('/edit/events/{id}', [EventsController::class, 'EditEvent'])->name('edit.event');
Route::post('/update/events', [EventsController::class, 'UpdateEvent'])->name('update.event');
Route::get('/delete/events/{id}', [EventsController::class, 'DeleteEvent'])->name('delete.event');
//members
Route::get('/members/create', [MembersController::class, 'create'])->name('create.member');
Route::post('/members', [MembersController::class, 'store'])->name('members.store');
Route::get('/members', [MembersController::class, 'index'])->name('all.members');
Route::get('/edit/members/{id}', [MembersController::class, 'EditMember'])->name('edit.member');
Route::post('/update/members', [MembersController::class, 'UpdateMember'])->name('update.member');
Route::get('/delete/members/{id}', [MembersController::class, 'DeleteMember'])->name('delete.member');
