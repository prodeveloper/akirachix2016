<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function () {
    return view('students',['students'=>App\Student::all()]);
  
});

Route::get('/students/add', function () {
    return view('new_student');
});

Route::post('/students/add', function () {
    return Request::all();
    return "student added";
});