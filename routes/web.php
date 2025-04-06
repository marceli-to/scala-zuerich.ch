<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ApartmentController;

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

Route::view('/', 'pages.home')->name('page.home');
Route::view('/lage', 'pages.location')->name('page.location');
Route::view('/wohnen', 'pages.living')->name('page.living');
Route::view('/angebot', 'pages.offer')->name('page.offer');
Route::view('/faq', 'pages.faq')->name('page.faq');
Route::view('/disclaimer', 'pages.disclaimer')->name('page.disclaimer');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');





