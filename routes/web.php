<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CareerController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FaqsController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\QuoteController;
use App\Http\Controllers\Front\ServiceController;

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

#### Home ####
Route::get('/', [HomeController::class, 'index'])->name('home');

#### About ####
Route::get('/about', [AboutController::class, 'index'])->name('about');

#### Blog ####
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogDetails', [BlogController::class, 'blogDetails'])->name('blogDetails');

#### Career ####
Route::get('/career', [CareerController::class, 'index'])->name('career');

#### Contact ####
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

#### Faqs ####
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');

#### Project ####
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/singleProduct', [ProductController::class, 'singleProduct'])->name('singleProduct');

#### Quote ####
Route::get('/quote', [QuoteController::class, 'index'])->name('quote');

### Service ####
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/singleService', [ServiceController::class, 'singleService'])->name('singleService');
