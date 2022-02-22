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

Route::get('', [FrontController::class, 'home'])->name('home');

Route::get('services', [FrontController::class, 'services'])->name('services');

Route::get('about', [FrontController::class, 'about'])->name('about');

Route::get('contact', [FrontController::class, 'contact'])->name('contact');

Route::get('faq', [FrontController::class, 'faq'])->name('faq');

Route::get('sign-up', [FrontController::class, 'signUp'])->name('sign.up');
