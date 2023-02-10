<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::post('/submit', [PagesController::class, 'submit'])->name('submit.form');
Route::get('/update/{id}', [PagesController::class, 'viewUpdate'])->name('view.update');
Route::post('/update/{id}', [PagesController::class, 'update'])->name('update');
Route::post('/delete/{id}', [PagesController::class, 'delete'])->name('delete');


/* Resource Routes */
Route::resource('user', 'App\\Http\\Controllers\\PagesController');
