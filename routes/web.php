<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// user routes 
Route::post('/login',[UserController::class,'login'])->middleware('gest');
Route::post('/register',[UserController::class, 'register' ])->middleware('gest');
Route::get('/register',[UserController::class, 'showRegisterPage'])->middleware('gest'
);
Route::post('/logout',[UserController::class, 'logout'])->middleware('mustBeLoggedIn');

// post routers 
Route::get('/create-post',[PostController::class,'showCreatePostPage'])->middleware('mustBeLoggedIn');
Route::post('/create-post',[PostController::class, 'createPost'])->middleware('mustBeLoggedIn');
Route::get('/post/{post}',[PostController::class, 'showSinglePost'])->middleware('mustBeLoggedIn');




