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

Route::get('/', function () {
    return view('patricknjenga.home');
});
Route::get('/student', function () {
    return view('patricknjenga.student');
});

Route::get('/allstudents', "StudentController@getAllStudents");
Route::get('/fees', 	"StudentController@create");

Route::get('/history/{id}', "FeesController@getHistory");
Route::post('/student', "StudentController@insertStudent");
Route::post('/fees', 	"FeesController@insertFees");
