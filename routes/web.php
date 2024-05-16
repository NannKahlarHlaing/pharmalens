<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
        return view('home');
    });

    Route::controller(InformationController::class)->group(function(){
        Route::get('company-profile', 'company_profile')->name('company-profile');
    });

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
    Route::prefix('/products')->group(function(){
        Route::controller(ProductController::class)->group(function(){
            Route::get('/', 'index')->name('products');
            Route::get('/create', 'create')->name('products.create');
            Route::post('/create', 'store')->name('products.store');
        });
    });
});




