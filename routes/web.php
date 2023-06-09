<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PageController, ArticleController};
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

Route::view('/', 'page.welcome');

Route::resource('articles', ArticleController::class);

Route::get('about', [PageController::class, 'about']);
