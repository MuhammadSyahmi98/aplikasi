<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadualController;

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
});


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