<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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
});*/


Route::get('/', [PageController::class, 'getIndex']);

Route::get('/login', [UserController::class, 'getLogin']);

Route::post('/login', [UserController::class, 'postLogin']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/registration', [UserController::class, 'getRegistration']);

Route::get('/form1', [UserController::class, 'getForm1']);
