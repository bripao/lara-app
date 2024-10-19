<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{product}', 'show')->name('show');
        Route::get('/{product}/edit', 'edit')->name('edit');
        Route::patch('/{product}', 'update')->name('update');
        Route::delete('/{product}', 'destroy')->name('destroy');
    });

Route::get('/flight', [FlightController::class, 'index'])->name('flight.index');
Route::get('/flight/create', [FlightController::class, 'create'])->name('flight.create');
Route::post('/flight/store', [FlightController::class, 'store'])->name('flight.store');
