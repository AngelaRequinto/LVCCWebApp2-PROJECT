<?php

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

// Route::get('/','Controller@getData');
Route::get('/',function(){
	return view('welcome');
});
/*Route::post('/insert','StudentController@add');
// Route::get('/Form', 'Registration@showForm');
// Route::post('/listahan','Registration@reg');
// Route::get('/List','Registration@showlist');
// Route::
Route::post('/update','StudentController@editStudent');
Route::post('/updating/{id}','StudentController@updateStudent');
Route::post('/delete','StudentController@deleteStudent');
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/create','HomeController@createpage');
Route::get('/publish',"HomeController@add");
       