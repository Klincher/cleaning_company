<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ResultController;

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

Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

Route::prefix('clients')->group(function () {
    Route::get('/', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
    Route::post('/', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');
});

Route::prefix('orders')->group(function () {
    Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
    Route::post('/', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');
});

Route::get('result/{id}', [ResultController::class, 'index'])->name('result');

Route::get('clear', [ResultController::class, 'clear'])->name('clear');

Route::get('dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('dashboard', [AdminController::class, 'update'])->middleware(['auth'])->name('dashboard.update');

Route::get('editor', [PriceController::class, 'index'])->middleware(['auth'])->name('editor');

Route::post('editor', [PriceController::class, 'update'])->middleware(['auth'])->name('editor.update');
