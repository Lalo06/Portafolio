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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/notes', [App\Http\Controllers\NotesController::class, 'index'])->name('notes');
Route::get('/notes/create', [App\Http\Controllers\NotesController::class, 'create'])->name('notes.create');
Route::post('/notes', [App\Http\Controllers\NotesController::class, 'store'])->name('notes.store');