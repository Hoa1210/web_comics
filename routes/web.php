<?php

use App\Http\Controllers\admin\CategoriesController;
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
    Route::get('/the-loai', [CategoriesController::class, 'index'])->name('admin.categories');
    Route::get('/them-the-loai', [CategoriesController::class, 'create'])->name('admin.categories.create');
});