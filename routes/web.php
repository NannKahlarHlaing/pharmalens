<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteNewController;
use App\Http\Controllers\InformationController;

if (\Request::segment(1) =='en') {
    $lang ='en';
    \App::setLocale('en');
}
else{
    $lang ='';
    \App::setLocale('mm');
}
Route::prefix($lang)->group(function ($lang) {
    Route::get('/', function () {
        return view('public.home');
    });

    Route::controller(InformationController::class)->group(function(){
        Route::get('company-profile', 'company_profile')->name('company-profile');
    });

    Route::controller(ContactController::class)->group(function(){
        Route::get('contact', 'index')->name('contact');
    });

    Route::get('/news', [WebsiteNewController::class, 'news'])->name('news');

});

//admin
Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'create')->middleware('guest');
    Route::post('/register', 'store')->name('register')->middleware('guest');
    Route::get('/login', 'login')->middleware('guest');
    Route::post('/login', 'post_login')->name('login')->middleware('guest');
    Route::post('logout','logout')->middleware('auth');

    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(InformationController::class)->group(function (){
        Route::get('/dashboard/information', 'index')->name('dashboard.information');
        Route::post('/dashboard/information', 'store');

    });
    Route::prefix('dashboard/products')->group(function(){
        Route::controller(ProductController::class)->group(function(){
            Route::get('/', 'index')->name('products');
            Route::get('/create', 'create')->name('products.create');
            Route::post('/create', 'store')->name('products.store');
            Route::get('{product}/edit', 'edit')->name('products.edit');
            Route::post('{product}/update', 'update')->name('products.update');
            Route::delete('{product}/delete', 'destroy')->name('products.destroy');
        });
    });

    Route::prefix('/dashboard/news')->group(function(){
        Route::controller(WebsiteNewController::class)->group(function(){
            Route::get('/', 'index')->name('dashboard.news');
            Route::get('/create', 'create')->name('dashboard.news.create');
            Route::post('/create', 'store')->name('dashboard.news.store');
            Route::get('{new}/edit', 'edit')->name('dashboard.news.edit');
            Route::post('{new}/update', 'update')->name('dashboard.news.update');
            Route::delete('{new}/delete', 'destroy')->name('dashboard.news.destroy');
        });
    });
});




