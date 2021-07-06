<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
})->name('home');





/**
 * Auhthetication
 */


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::POST('/register', [RegisterController::class, 'store'])->name('register-store');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::POST('/login', [LoginController::class, 'store'])->name('login-store');

















/**
 * Book Controller
 */
Route::get('/book/create', [BookController::class, 'create'])->name('book-create');

 Route::get('/book/{id}', [BookController::class, 'show'])->name('book-single');

 Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book-edit');

 Route::post('/book/{id}', [BookController::class, 'update'])->name('book-update');

 Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book-destroy');

 Route::get('/book', [BookController::class, 'index'])->name('book-listing');

 Route::post('/book/', [BookController::class, 'store'])->name('book-store');

 Route::get('/authors', [BookController::class, 'authors'])->name('author-listing');


// Redirect

Route::redirect('/syahmi', '/');

// view
Route::view('/pelajar', 'pelajar', [
    'nama'=> 'Syahmi'
]);

/**
 * GET - Displau
 * POST - Terima and store data
 * PUT - Update
 * PATCH - Update
 * DELETE - Delete
 * OPTION -
 * 
 */


 Route::get('/kelas' , function() {
     return view('go');
     
 });


 Route::post('/kelas' , function() {
    echo "<h1>Post</h1>";
});


Route::get('/kelass{ name?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }' , function($name) {
    echo $name;
    
});


Route::get('/jadual/{subject}', [JadualController::class, 'index']);

Route:: resource('user', UserController::class);


Route::get('/test', [DashboardController::class, 'test']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');


// Email

Route::get('/email/welcome', function(){
    return new App\Mail\WelcomeEmail();
});
