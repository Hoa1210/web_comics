<?php

use App\Http\Controllers\admin\ChapterAdminController;
use App\Http\Controllers\admin\ComicAdminController;
use App\Http\Controllers\admin\GenreAdminController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeAdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\SocicalController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ComicController;
use App\Http\Controllers\client\CommentController;
use App\Http\Controllers\client\FarvoriteController;
use App\Http\Controllers\client\GenreController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLoginAdmin;
use Laravel\Socialite\Facades\Socialite;

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
Route::get('/tim-truyen',[GenreController::class,'index'])->name('genre');
Route::get('/tim-truyen/{genre}',[GenreController::class,'search'])->name('genre-search');
Route::get('/binh-luan',[CommentController::class,'comment'])->name('comment');
Route::get('/theo-doi',[FarvoriteController::class, 'index'])->name('farvorite');
Route::get('/tim-kiem',[HomeController::class, 'search'])->name('search');

Route::get('/dang-ky',[LoginController::class, 'viewRegister'])->name('users.register.view');
Route::post('/dang-ky',[LoginController::class, 'register'])->name('users.register');
Route::get('/dang-nhap',[LoginController::class,'viewLogin'])->name('users.login.view');
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('users.login');
Route::get('/dang-xuat',[LoginController::class,'logout'])->name('users.logout');


Route::group(['prefix'=>'admin'],function (){
    Route::get('/login', [LoginController::class,'loginAdmin'])->name('admin.login');
    Route::post('/login', [LoginController::class,'authAdmin'])->name('admin.auth');
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth.admin'],function () {
    Route::get('/logout', [LoginController::class,'logoutAdmin'])->name('admin.logout');

    Route::get('/home', [HomeAdminController::class, 'index'])->name('admin.home');

    Route::get('/genres', [GenreAdminController::class, 'index'])->name('admin.genres');
    Route::get('/genres/create', [GenreAdminController::class, 'create'])->name('admin.genres.create');
    Route::post('/genres', [GenreAdminController::class, 'store'])->name('admin.genres.store');
    Route::delete('/genres/{id_genre}', [GenreAdminController::class, 'delete'])->name('admin.genres.delete');
    Route::get('/genres/{id_genre}/edit', [GenreAdminController::class, 'edit'])->name('admin.genres.edit');
    Route::put('/genres/{id_genre}', [GenreAdminController::class, 'update'])->name('admin.genres.update');

    Route::get('/comics', [ComicAdminController::class, 'index'])->name('admin.comics');
    Route::get('/comics/create', [ComicAdminController::class, 'create'])->name('admin.comics.create');
    Route::post('/comics', [ComicAdminController::class, 'store'])->name('admin.comics.store');
    Route::delete('/comics/{id_comic}', [ComicAdminController::class, 'delete'])->name('admin.comics.delete');
    Route::get('/comics/{id_comic}/edit', [ComicAdminController::class, 'edit'])->name('admin.comics.edit');
    Route::put('comics/{id_comic}', [ComicAdminController::class,'update'])->name('admin.comics.update');

    Route::get('/chapters/create', [ChapterAdminController::class, 'create'])->name('admin.chapter.create');
    Route::post('/chapters', [ChapterAdminController::class, 'store'])->name('admin.chapter.store');
});

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');

Route::get('/auth/callback/{provider}', [SocicalController::class, 'socical'])->name('auth.callback');