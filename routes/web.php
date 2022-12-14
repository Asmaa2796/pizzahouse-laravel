<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// ? middleware('auth') :: protect routes individually
Route::get('/pizzas','PizzaController@index')->middleware('auth');
Route::get('/pizzas/create','PizzaController@create');
Route::post('/pizzas','PizzaController@store');
// example for route parameter [wildcard] [no ? in url]
Route::get('/pizzas/{id}','PizzaController@show')->middleware('auth');
Route::delete('/pizzas/{id}','PizzaController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
