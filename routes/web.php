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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\expenseController;
use App\Http\Controllers\ItemGroupController;

Route::get('/index',[expenseController::class,'index_page']);

Route::get('/register',[expenseController::class,'register_page']);
Route::post('/submit',[expenseController::class,'submit']);

Route::get('/login',[expenseController::class,'login_page']);
Route::post('/show',[expenseController::class,'show_page']);

Route::get('/edit{id}',[submitController::class,'edit_data']);


Route::get('/item-group',[ItemGroupController::class,'index']);
Route::post('/save-item-group',[ItemGroupController::class,'save']);
Route::get('/item-groups',[ItemGroupController::class,'list'])->name('item-groups');
