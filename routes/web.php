<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;

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
    return view('halamanLogin');
});

Route::get('/halamanLogin', [LoginController::class,'toHalamanLogin'])->name('halamanLogin')->middleware('guest');

Route::post('/halamanLogin', [LoginController::class,'login'])->name('halamanLogin');

Route::post('/logout', [LogoutController::class,'toHalamanLogin'])->name('logout');

// Route::get('/halamanLogin', [LogoutController::class,'toHalamanLogin']);

Route::get('/halamanUtama', [PostController::class,'getPosts'])->name('halamanUtama');

Route::post('/halamanUtama', [PostController::class,'createNewPost']);

Route::get('/halamanDetailUnggahan/{post:id}', [PostController::class,'toHalamanDetailUnggahan']);

// Route::get('/halamanDetailUnggahan/{post:id}', [PostController::class,'tampilkanKomentar']);

// Route::post('/halamanDetailUnggahan/{post:id}', [PostController::class,'tambahKomentar']);

// Route::get('/halamanDetailUnggahan', [PostController::class,'toHalamanDetailUnggahan']);

// Route::get('/editprofil', function () {
//     return view('editprofil');
// });

Route::get('/halamanRegister', [RegisterController::class,'toHalamanRegister']);

Route::post('/halamanRegister', [RegisterController::class,'mendaftarAkun']);
