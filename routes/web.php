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
Route::get('/login',[LoginController::class,'login'])->name('users.login');
Route::get('/logout',[LoginController::class,'logout'])->name('users.logout');
Route::get('/binh-luan',[CommentController::class,'comment'])->name('comment');

Route::group(['prefix'=>'admin'],function (){
    Route::get('/login', [LoginController::class,'loginAdmin'])->name('admin.login');
    Route::post('/login', [LoginController::class,'authAdmin'])->name('admin.auth');
});
Route::group(['prefix'=>'admin', 'middleware'=>'auth.admin'],function () {
    Route::get('/logout', [LoginController::class,'logoutAdmin'])->name('admin.logout');

    Route::get('/home', [HomeAdminController::class, 'index'])->name('admin.home');

    Route::get('/genners', [GenreAdminController::class, 'index'])->name('admin.genres');
    Route::get('/add-genner', [GenreAdminController::class, 'create'])->name('admin.genres.create');
    Route::post('/add-genner', [GenreAdminController::class, 'store'])->name('admin.genres.store');

    Route::get('/comics', [ComicAdminController::class, 'index'])->name('admin.comics');
    Route::get('/add-comic', [ComicAdminController::class, 'create'])->name('admin.comics.create');
    Route::post('/add-comic', [ComicAdminController::class, 'store'])->name('admin.comics.store');
    Route::delete('/delete-comic/{id_comic}', [ComicAdminController::class, 'delete'])->name('admin.comics.delete');

    Route::get('/them-chapter', [ChapterAdminController::class, 'create'])->name('admin.chapter.create');
    Route::post('/them-chapter', [ChapterAdminController::class, 'store'])->name('admin.chapter.store');
});

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');

Route::get('/auth/callback/{provider}', [SocicalController::class, 'socical'])->name('auth.callback');