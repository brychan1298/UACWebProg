<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [UserController::class, 'index']);

Route::get('/register', function(){
    return view('register');
})->middleware('guest');

Route::get('/login', function(){
    return view('login');
})->name('login')->middleware('guest');

Route::post('/register', [LoginController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/payment', [UserController::class, 'payment']);
Route::post('/payment', [UserController::class, 'pay']);
Route::get('/detailUser/{id}', [UserController::class, 'show'])->middleware('auth');
Route::get('/detailUser2/{id}', [UserController::class, 'show2'])->middleware('auth');

Route::get('/profile',[UserController::class, 'profile'])->middleware('auth');
Route::get('/top-up',[UserController::class, 'topupPage'])->middleware('auth');
Route::post('/top-up',[UserController::class, 'topup']);
Route::get('/notifications', [FriendController::class, 'notifications'])->middleware('auth');
Route::get('/acc-friend/{id}', [FriendController::class, 'accept']);
Route::get('/delete-friend/{id}', [FriendController::class, 'destroy']);

Route::get('/shop',function(){
    return view('shop');
});

Route::get('/male', [UserController::class, 'filterMale']);
Route::get('/female', [UserController::class, 'filterFemale']);
Route::get('/add-friend/{user_id}', [UserController::class, 'addFriend']);

