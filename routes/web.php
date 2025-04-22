<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [TaskController::class, 'index'])->name('home');
Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/store', [TaskController::class, 'store'])->name('store');

Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('edit');
Route::put('/{task}/update', [TaskController::class, 'update'])->name('update');
Route::delete('/{task}/delete', [TaskController::class, 'destroy'])->name('delete');




