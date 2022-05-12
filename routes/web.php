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

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');

Route::get('/news', [App\Http\Controllers\Front\FrontController::class, 'news'])->name('news');

Route::get('/news/world', [App\Http\Controllers\Front\FrontController::class, 'newsWorld']);

Route::get('/news/detailnews',[App\Http\Controllers\Front\FrontController::class, 'newsDetails']);

Route::get('/shows', function () {
    return view('shows.allshows');
});
Route::get('/shows/detailshow', function () {
    return view('shows.detailshow');
});

Route::group(['prefix' => 'admin','middleware' => ['auth']], function() {

    //admin routes for news category
    Route::get('news/categories', [App\Http\Controllers\Admin\NewsCategoryController::class,'index'])->name('admin.news.categories');
    Route::get('add/news/category',[App\Http\Controllers\Admin\NewsCategoryController::class,'create'])->name('admin.news.category.create');
    Route::post('store/news/category',[App\Http\Controllers\Admin\NewsCategoryController::class,'store'] )->name('admin.news.category.store');
    Route::get('edit/news/category/{id}',[App\Http\Controllers\Admin\NewsCategoryController::class,'edit'])->name('admin.news.category.edit');
    Route::post('update/news/category/{id}',[App\Http\Controllers\Admin\NewsCategoryController::class,'update'])->name('admin.news.category.updates');
    Route::get('delete/news/category/{id}',[App\Http\Controllers\Admin\NewsCategoryController::class,'destroy'] )->name('admin.news.category.delete');

    //admin routes for news sub category
    Route::get('news/sub/categories', [App\Http\Controllers\Admin\NewsSubCategoryController::class,'index'])->name('admin.news.sub.categories');
    Route::get('add/news/sub/category',[App\Http\Controllers\Admin\NewsSubCategoryController::class,'create'])->name('admin.news.sub.category.create');
    Route::post('store/news/sub/category', [App\Http\Controllers\Admin\NewsSubCategoryController::class,'store'])->name('admin.news.sub.category.store');
    Route::get('edit/news/sub/category/{id}', [App\Http\Controllers\Admin\NewsSubCategoryController::class,'edit'])->name('admin.news.sub.category.edit');
    Route::post('update/news/sub/category/{id}', [App\Http\Controllers\Admin\NewsSubCategoryController::class,'update'])->name('admin.news.sub.category.updates');
    Route::get('delete/news/sub/category/{id}', [App\Http\Controllers\Admin\NewsSubCategoryController::class,'delete'])->name('admin.news.sub.category.delete');

    //admin routes for news regions
    Route::get('news/regions', [App\Http\Controllers\Admin\NewsRegionController::class,'index'])->name('admin.news.regions');
    Route::get('add/news/region',[App\Http\Controllers\Admin\NewsRegionController::class,'create'])->name('admin.news.region.create');
    Route::post('store/news/region', [App\Http\Controllers\Admin\NewsRegionController::class,'store'])->name('admin.news.region.store');
    Route::get('edit/news/region/{id}', [App\Http\Controllers\Admin\NewsRegionController::class,'edit'])->name('admin.news.region.edit');
    Route::post('update/news/region/{id}', [App\Http\Controllers\Admin\NewsRegionController::class,'update'])->name('admin.news.region.updates');
    Route::get('delete/news/region/{id}', [App\Http\Controllers\Admin\NewsRegionController::class,'destroy'])->name('admin.news.region.delete');

    //admin routes for news
    Route::get('news', [App\Http\Controllers\Admin\NewsController::class,'index'])->name('admin.news');
    Route::get('add/news',[App\Http\Controllers\Admin\NewsController::class,'create'])->name('admin.news.create');
    Route::post('store/news', [App\Http\Controllers\Admin\NewsController::class,'store'])->name('admin.news.store');
    Route::get('edit/news/{id}', [App\Http\Controllers\Admin\NewsController::class,'edit'])->name('admin.news.edit');
    Route::post('update/news/{id}', [App\Http\Controllers\Admin\NewsController::class,'update'])->name('admin.news.updates');
    Route::get('delete/news/{id}', [App\Http\Controllers\Admin\NewsController::class,'destroy'])->name('admin.news.delete');
    Route::post('news/image', [App\Http\Controllers\Admin\NewsController::class,'storeImage'])->name('news.image');


    //admin routes for news comments
    Route::get('news/comments', 'Admin\NewsCommentController@index')->name('admin.comments');
    Route::get('add/comment','Admin\NewsCommentController@create')->name('admin.news.comment.create');
    Route::post('store/comment', 'Admin\NewsCommentController@store')->name('admin.news.comment.store');
    Route::get('edit/comment/{id}', 'Admin\NewsCommentController@edit')->name('admin.news.comment.edit');
    Route::post('update/comment/{id}', 'Admin\NewsCommentController@update')->name('admin.news.comment.updates');
    Route::get('delete/comment/{id}', 'Admin\NewsCommentController@destroy')->name('admin.news.comment.delete');

    //admin route for shows category
    Route::get('shows/categories', [App\Http\Controllers\Admin\ShowsCategoryController::class,'index'])->name('admin.shows.categories');
    Route::get('add/shows/category', [App\Http\Controllers\Admin\ShowsCategoryController::class,'create'])->name('admin.shows.category.create');
    Route::post('store/shows/category', [App\Http\Controllers\Admin\ShowsCategoryController::class,'store'])->name('admin.shows.category.store');
    Route::get('edit/shows/category/{id}', [App\Http\Controllers\Admin\ShowsCategoryController::class,'edit'])->name('admin.shows.category.edit');
    Route::post('update/shows/category/{id}', [App\Http\Controllers\Admin\ShowsCategoryController::class,'update'])->name('admin.shows.category.update');
    Route::get('delete/shows/category/{id}',[App\Http\Controllers\Admin\ShowsCategoryController::class,'destroy'] )->name('admin.shows.category.delete');

    //admin route for shows
    Route::get('shows', [App\Http\Controllers\Admin\ShowsController::class,'index'])->name('admin.shows');
    Route::get('add/shows', [App\Http\Controllers\Admin\ShowsController::class,'create'])->name('admin.shows.create');
    Route::post('store/shows', [App\Http\Controllers\Admin\ShowsController::class,'store'])->name('admin.shows.store');
    Route::get('edit/shows/{id}', [App\Http\Controllers\Admin\ShowsController::class,'edit'])->name('admin.shows.edit');
    Route::post('update/shows/{id}', [App\Http\Controllers\Admin\ShowsController::class,'update'])->name('admin.shows.update');
    Route::get('delete/shows/{id}', [App\Http\Controllers\Admin\ShowsController::class,'destroy'])->name('admin.shows.delete');
    Route::post('shows/image', [App\Http\Controllers\Admin\ShowsController::class,'storeImage'])->name('admin.shows.image.store');

    //admin password change 
    Route::get('change/password', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.password.change');
    Route::post('store/change/password', [App\Http\Controllers\Admin\SettingController::class, 'changePassword'])->name('admin.password.store');
});
