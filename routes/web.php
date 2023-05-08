<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Routing\RouteGroup;

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
    Route::get('/admin/login',[PagesController::class, 'adminlogin'])->name('admin.login');
    Route::post('/dologin', [AdminAuthController::class, 'dologin'])->name('admin.dologin');
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

Route::middleware('isadmin')->prefix('admin')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/all-users', [AdminController::class, 'allusers'])->name('admin.users');
    Route::get('/users-reset/{id}', [AdminController::class, 'resetpassword'])->name('admin.users.reset');
    Route::get('/users-delete/{id}', [AdminController::class, 'deleteuser'])->name('admin.users.delete');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
