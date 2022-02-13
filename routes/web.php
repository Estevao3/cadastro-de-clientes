<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('create', [ClientController::class, 'create'])->name('create');
Route::post('store', [ClientController::class, 'store'])->name('store');
Route::delete( 'delete/{id}', [ClientController::class, 'destroy'])->name('delete');
Route::get('edit/{id}', [ClientController::class, 'edit'])->name('edit');
Route::put('update/{id}', [ClientController::class, 'update'])->name('update');

