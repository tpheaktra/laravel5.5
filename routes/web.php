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
    return view('welcome');
});

//view 
Route::GET('/product/1',function(){
	//echo 'Hello';
	$name = 'Daro';
	return view('product.product-index')->with('name',$name);
});

//controller
Route::GET('/product/2','ProductController@controller');

//model
Route::GET('/product/3','ProductController@model');

Route::get('how/1',function(){
	echo "string";

});
Route::get('how/2',function(){
	return view('datashow.show');

});
Route::GET('how/3','ShowController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');









/*======================================================
====================== Student Route =================
========================================================*/

Route::get('/add-new-student',['as'=>'addNewStudent','uses'=>'StudentController@addNewStudent']);

