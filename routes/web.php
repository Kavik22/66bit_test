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
    return redirect()->route('footballist.create');
});

Route::group(['prefix' => 'footballist'], function () {
    Route::get('/', [\App\Http\Controllers\FootballistController::class, 'index'])->name('footballist.index');
    Route::get('/create', [\App\Http\Controllers\FootballistController::class, 'create'])->name('footballist.create');
    Route::post('/', [\App\Http\Controllers\FootballistController::class, 'store'])->name('footballist.store');
    Route::get('/{footballist}/edit', [\App\Http\Controllers\FootballistController::class, 'edit'])->name('footballist.edit');
    Route::get('/{footballist}', [\App\Http\Controllers\FootballistController::class, 'show'])->name('footballist.show');
    Route::patch('/{footballist}', [\App\Http\Controllers\FootballistController::class, 'update'])->name('footballist.update');
    Route::delete('/{footballist}', [\App\Http\Controllers\FootballistController::class, 'delete'])->name('footballist.delete');
});
