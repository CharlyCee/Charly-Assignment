<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
/*
Route::get('/', function () {
    return view('welcome');

}); */

Route::get('/',[PagesController::class, 'home']);
Route::middleware(['guest',])->group(function () {
    Route::get('/register',[PagesController::class, 'register'])->name('register');
    Route::get('/login',[PagesController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'doregister'])->name('register');
    Route::post('/login', [AuthController::class, 'dologin'])->name('login');
    Route::get('/forgot-password',[PagesController::class, 'forgotpassword'])->name('forgot.password');
    Route::get('/reset-password',[PagesController::class, 'resetpassword'])->name('reset.password');
    Route::post('/checkuser', [AuthController::class, 'checkuser'])->name('checkuser');
    Route::post('/resendemail', [AuthController::class, 'resendemail'])->name('resendemail');
    Route::post('/change-password', [AuthController::class, 'resetpassword'])->name('change.password');
});




Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard',[PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
});
