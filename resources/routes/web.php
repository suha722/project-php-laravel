<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get("" ,[App\Http\Controllers\c_post::class, 'showpost']); 
Route::get("" ,[App\Http\Controllers\c_post::class, 'showpost']);

Route::get("/addpost" ,[App\Http\Controllers\c_post::class, 'addpost'])->middleware('auth');
Route::post("/insertpost" ,[App\Http\Controllers\c_post::class, 'insertpost']);

Route::get("/posts" ,[App\Http\Controllers\c_post::class, 'showpost'])->middleware('auth');
Route::get("/editpost/{id}" ,[App\Http\Controllers\c_post::class, 'editpost'])->middleware('auth');
Route::post("/updatepost/{id}" ,[App\Http\Controllers\c_post::class, 'updatepost']);


    // Auth::routes();
    // Rout::get('/home','HomeController@index')->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/logout" ,function(){
    Auth::logout();
    return redirect("/posts");
});
