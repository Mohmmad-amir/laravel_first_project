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
    return view('home');
})->name("home");
Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/add', 'TestController@addPage')->name('addPage');
Route::POST('/add', 'TestController@addINFO')->name('addInfo');


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


// route for product
Route::get('/products', 'ProductController@index')->name('products.all');
Route::get('/products/add', 'ProductController@create')->name('products.create');
Route::post('/products/add', 'ProductController@store')->name('products.store');
Route::get('products/{id}/show', 'ProductController@show')->name('products.show');
Route::get('/products/{id}edit', 'ProductController@edit')->name('products.edit');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
