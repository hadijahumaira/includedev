<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListifyController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist',[ListifyController::class, 'index'])->name('todolist');

Route::get('/addtodo',[ListifyController::class, 'addtodo'])->name('addtodo');
Route::post('/inserttodo',[ListifyController::class, 'inserttodo'])->name('inserttodo');

Route::get('/showtodo/{id}',[ListifyController::class, 'showtodo'])->name('showtodo');
Route::post('/updatetodo/{id}',[ListifyController::class, 'updatetodo'])->name('updatetodo');

Route::get('/deletetodo/{id}',[ListifyController::class, 'deletetodo'])->name('deletetodo');
