<?php

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

Route::get('/',[\App\Http\Controllers\UserController::class,'ShowMainPage']);
Route::get('/login',[\App\Http\Controllers\UserController::class,'ShowLogin']);
Route::post('/login',[\App\Http\Controllers\UserController::class,'Login']);
Route::get('/signin',[\App\Http\Controllers\UserController::class,'ShowSinin']);
Route::post('/signin',[\App\Http\Controllers\UserController::class,'Singin']);
Route::get('/logout',[\App\Http\Controllers\UserController::class,'Logout']);
Route::get('/thelastsessions',[\App\Http\Controllers\UserController::class,'TheLastsessions']);
Route::get('/offDay',[\App\Http\Controllers\UserController::class,'offDay']);
Route::get('/article',[\App\Http\Controllers\UserController::class,'Article']);
Route::get('/test',[\App\Http\Controllers\UserController::class,'Test']);
Route::post('/test',[\App\Http\Controllers\UserController::class,'SetTest']);
