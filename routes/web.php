<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now srore something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PostController::class ,'index']  )->name(name : 'posts.index');
Route::get('/posts/create', [PostController::class,'create']  )->name(name : 'posts.create');
Route::post('/posts/store', [PostController::class,'store']  )->name(name : 'posts.store');
Route::get('/posts/destroy/{post}',[PostController::class,'destroy'])->name(name :"posts.destroy");
Route::get('/posts/{post}', [PostController::class ,'show']  )->name(name : 'posts.show');
