<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// HOME ROUTE
Route::get('/home', [ProductController::class, 'home'])->name('home.index');

// CREATE ROUTE
Route::get('/home/create', [ProductController::class, 'create'])->name('create.index');

// POST ROUTE
Route::post('/home', [ProductController::class, 'store'])->name('product.store');

// EDIT ROUTE
Route::get('/home/{product}/edit', [ProductController::class, 'edit'])->name('edit.index');

// UPDATE ROUTE
Route::put('/home/{product}', [ProductController::class, 'update'])->name('product.update');

// DELETE ROUTE
Route::delete('/home/{product}', [ProductController::class, 'delete'])->name('delete.index');

