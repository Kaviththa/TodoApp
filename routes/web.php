<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//todo mini project
//Route::resource('/todo', 'TodoController');
//Route::middleware('auth')->group(function(){
    Route::get('/todos', 'TodoController@index')->name('todo.index');
    Route::get('/todos/create', 'TodoController@create')->name('todo.create');
    Route::post('/todos/create', 'TodoController@store')->name('todo.store');
    Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todo.edit');
    Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');
    Route::put('/todos/{todo}/destroy', 'TodoController@destroy')->name('todo.destroy');
    Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
    Route::put('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
//});














Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'Usercontroller@index');
Route::post('/upload','Usercontroller@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
