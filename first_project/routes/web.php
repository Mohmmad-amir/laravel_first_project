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

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::view('/hi', 'amir');
Route::get('/', function () {
    return view('amir');
});
Route::get('/student', function () {
    return view('student.newStudent');
});
Route::get('/newStudents', 'TestController@studentPageView');
Route::get('/newWelcome', 'TestController@welcomePage');

Route::get('/test', 'TestController@allData');
Route::get('/test/{id}', 'TestController@singleData');
