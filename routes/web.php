<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/todo', [TodoController::class,'index'])->middleware('auth');
Route::post("/create", [TodoController::class,'create'])->name('todo.create');
Route::get("/create", function(){
    return view("create");
});
Route::get("/", function(){
    return view("welcome");
});
Route::patch("/update/{todo}", [TodoController::class,'update']);
Route::get('/edit/{todo}',[TodoController::class,'edit']);
Route::patch("/complete/{todo}", [TodoController::class,'complete']);
Route::delete("/delete/{todo}", [TodoController::class,'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
