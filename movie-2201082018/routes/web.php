<?php

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

Route::get('/layout', function () {
    return view('layout.layout');
});
use App\Http\Controllers\AmelController;

Route::get('/movies', [AmelController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [AmelController::class, 'show'])->name('movies.show');


