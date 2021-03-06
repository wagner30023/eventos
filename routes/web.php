<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\EventController;

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

// Route::get('/',[EventController::class,'index']);
Route::get('/','EventController@index');
Route::get('/events/create','EventController@create')->middleware('auth');
Route::get('/events/{id}','EventController@show');
Route::post('/events','EventController@store');
Route::get('/dashboard','EventController@dashboard')->middleware('auth');
Route::delete('events/{id}','EventController@destroy')->middleware('auth');
Route::get('/events/edit/{id}','EventController@edit')->middleware('auth');
Route::put('/events/update/{id}','EventController@update')->middleware('auth');
Route::post('/events/join/{id}','EventController@joinEvent')->middleware('auth');


Route::get('/contact',function(){
    return view('contact');
});

