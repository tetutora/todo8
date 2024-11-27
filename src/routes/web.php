<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;

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


Route::controller(TodoController::class)->group(function ()
{
    Route::get('/','index');
    Route::post('/todos','store');
    Route::patch('/todos/update','update');
    Route::delete('/todos/delete','destroy');
    Route::get('todos/search','search');
});

Route::controller(CategoryController::class)->group(function ()
{
    Route::get('/categories','index');
    Route::post('/categories','store');
    Route::patch('/categories/update','update');
    Route::delete('/categories/delete','destroy');
});
