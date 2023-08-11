<?php

use App\Http\Controllers\FollowController;
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

Route::get('/', [UserController::class, 'showHomePage'])->middleware('mustBeLoggedIn');

// user routes 
Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/register', [UserController::class, 'register'])->middleware('guest');
Route::get('/register', [UserController::class, 'showRegisterPage'])->middleware(
    'guest'
);
Route::get('/login', [UserController::class, 'showLoginPage'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('mustBeLoggedIn');
Route::get('/manage-avatar',[UserController::class, 'showAvatarUplod'])->middleware('mustBeLoggedIn');
Route::post('/manage-avatar',[UserController::class, 'storeAvatar'])->middleware('mustBeLoggedIn');


// follower routes 
Route::post('/create-follower/{user:username}',[FollowController::class, 'createFollower'])->middleware('mustBeLoggedIn');
Route::post('/remove-follower/{user:username}', [FollowController::class, 'removeFollower'])->middleware('mustBeLoggedIn');


// post routers 
Route::get('/create-post', [PostController::class, 'showCreatePostPage'])->middleware('mustBeLoggedIn');
Route::post('/create-post', [PostController::class, 'createPost'])->middleware('mustBeLoggedIn');
Route::get('/post/{post}', [PostController::class, 'showSinglePost']);
Route::delete('/post/{post}', [PostController::class, 'deletePost'])->middleware('can:delete,post');
Route::get('/edit-post/{post}', [PostController::class, 'showEditPostPage'])->middleware('can:update,post');
Route::put('/edit-post/{post}', [PostController::class, 'updatePost'])->middleware('can:update,post');

// profile routes
Route::get('/profile/{user:username}', [UserController::class, 'profile'])->middleware('mustBeLoggedIn');
Route::get('/profile/{user:username}/following',[UserController::class, 'following'])->middleware('mustBeLoggedIn');
Route::get('/profile/{user:username}/followers', [UserController::class, 'followers'])->middleware('mustBeLoggedIn');