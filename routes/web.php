<?php

use App\Http\Controllers\admin\ComicsController;
use App\Http\Controllers\admin\GenresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeAdminController;
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

Route::get('/', function () {
    // return view('welcome');
    return redirect(route('admin.home'));
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/trang-chu', [HomeAdminController::class, 'index'])->name('admin.home');

    Route::get('/the-loai', [GenresController::class, 'index'])->name('admin.genres');
    Route::get('/them-the-loai', [GenresController::class, 'create'])->name('admin.genres.create');
    Route::post('/them-the-loai', [GenresController::class, 'store'])->name('admin.genres.store');

    Route::get('/truyen', [ComicsController::class, 'index'])->name('admin.comics');
    Route::get('them-truyen', [ComicsController::class, 'create'])->name('admin.comics.create');
    Route::post('them-truyen', [ComicsController::class, 'store'])->name('admin.comics.store');
});