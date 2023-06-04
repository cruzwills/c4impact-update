<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/resources', [HomeController::class, 'resources'])->name('resources');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/blog-detail', [HomeController::class, 'blogDetail'])->name('blog-detail');
