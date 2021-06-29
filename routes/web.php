<?php

use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;


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