<?php

use App\Http\Controllers\PostController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/store', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/post/{post}/comment', [PostController::class, 'comment']);
Route::get('/post/{post}/like', [PostController::class, 'like'])->name('post.like');
Route::get('/post/{post}/unlike', [PostController::class, 'unlike'])->name('post.unlike');
// Route::get('/posts/{post}/comment', [PostController::class, 'showComment']);
