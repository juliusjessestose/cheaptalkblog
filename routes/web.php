<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PageController;

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

//Auth routes
Route::get('/',[AuthController::class, 'loginForm'])->name('login'); 
Route::post('/',[AuthController::class, 'login']); 
Route::get('/register',[AuthController::class, 'registerForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);


Route::get('/dashboard', function(){ 
    return view('dashboard');
})->middleware('auth');

//crud video routes
Route::group(['middleware'=> ['auth', 'verified']],function(){
    Route::get('/posts/my-posts', [PostController::class,'index']);
    Route::get('/edit/{post}', [PostController::class, 'edit']);
    Route::get('/delete/{post}', [PostController::class, 'destroy']);
    Route::get('/posts/recent-posts',[PostController::class,'recentPosts']);
    //routes for logs
    Route::get('/logs',[SiteController::class, 'logs']);
});
