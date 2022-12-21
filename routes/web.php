<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;

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


Route::get('/',[HomeController::class,'home'])->name('welcome');

Route::get('/service/{slug}',[ServicesController::class,'services'])->name('service');
Route::get('/about',[PagesController::class,'about'])->name('about');

Route::get('/contact',[PagesController::class,'contact'])->name('contact');

Route::get('/portfolio',[PagesController::class,'portfolio'])->name('portfolio');

Route::get('/product/{slug}',[ShopController::class,'product'])->name('product');

Route::get('/project',[PagesController::class,'projects'])->name('projects');

Route::get('/services',[PagesController::class,'services'])->name('services');

Route::get('/shop/{slug}',[ShopController::class,'brandshop'])->name('brandshop');

Route::get('/single-blog',function(){
    return view('single-blog');

});
