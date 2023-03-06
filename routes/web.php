<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/transaksi', [PostController::class, 'transaksi'])->name('posts.transaksi');
Route::get('posts/transaksi/charge', [PostController::class, 'charge'])->name('posts.transaksi.charge');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');