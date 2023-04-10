<?php

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
Route::get('/register',[PagesController::class, 'register']);
Route::get('/login',[PagesController::class, 'login']);
Route::get('/user/dashboard',[PagesController::class, 'user/dashboard']);


/*
Route::get('/hello', function () {
    return '<h1>hello world</h1>';
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users/{$id}', function ($id) {
    return 'This is a user' . $id ;
}); */