<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/table', [TableController::class, 'getTable'])->name('table');

Route::get('/contact', [ContactController::class, 'getContact'])->name('contact');

Route::get('/about', [ContactController::class, 'getAbout'])->name('about');