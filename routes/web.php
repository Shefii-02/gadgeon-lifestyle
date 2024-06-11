<?php

use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    return 'done';
});

Route::get('/', function () {
    $title = "Home";
    return view('index',compact('title'));
});

Route::get('solutions', function () {
    $title = "Solutions";
    return view('solutions',compact('title'));
});

Route::get('products', function () {
    $title = "Products";
    return view('products',compact('title'));
});
Route::get('about-us', function () {
    $title = "About us";
    return view('about-us',compact('title'));
});


Route::get('contact-us', function () {
    $title = "Contact us";
    return view('contact-us',compact('title'));
});


Route::get('clear-cache', function() {
  Artisan::call('cache:clear');
  Artisan::call('view:clear');
  Artisan::call('route:clear');
  Artisan::call('config:clear');
  Artisan::call('optimize:clear');
  
  return "Cache is cleared..."; });

Route::post('contact-us', 'App\Http\Controllers\PostSubmit@submitContactForm')->name('contact-email');
Route::post('quote', 'App\Http\Controllers\PostSubmit@submitQuoteForm')->name('quote-email');



