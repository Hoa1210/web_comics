<?php

use App\Http\Controllers\admin\ChapterAdminController;
use App\Http\Controllers\admin\ComicAdminController;
use App\Http\Controllers\admin\GenreAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeAdminController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ComicController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/truyen-tranh/{comic}', [ComicController::class, 'index'])->name('index');
Route::get('/truyen-tranh/{comic}/{chapter}',[ComicController::class, 'chapter'])->name('chapter');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/trang-chu', [HomeAdminController::class, 'index'])->name('admin.home');

    Route::get('/the-loai', [GenreAdminController::class, 'index'])->name('admin.genres');
    Route::get('/them-the-loai', [GenreAdminController::class, 'create'])->name('admin.genres.create');
    Route::post('/them-the-loai', [GenreAdminController::class, 'store'])->name('admin.genres.store');

    Route::get('/truyen', [ComicAdminController::class, 'index'])->name('admin.comics');
    Route::get('/them-truyen', [ComicAdminController::class, 'create'])->name('admin.comics.create');
    Route::post('/them-truyen', [ComicAdminController::class, 'store'])->name('admin.comics.store');

    Route::get('/them-chapter', [ChapterAdminController::class, 'create'])->name('admin.chapter.create');
    Route::post('/them-chapter', [ChapterAdminController::class, 'store'])->name('admin.chapter.store');
});