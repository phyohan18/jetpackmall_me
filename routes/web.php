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

Route::get('/', 'FrontendController@index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Basic Routing

	//GET Method
	Route::get('hello','TestOneController@index'); //@ anouk ka hr ka fucntion name

	//POST Method
	Route::post('hello','TestOneController@index');

	// For ALL Method 
//(get , post, put, patch, delete, options)
	//resource pr yin fucntion name call sa yr  ma lo
	//--r two controler nk mha use loc ya mhr
	Route::resource('test','TestTwoController');

	//Route Parameters

	//GET Method
	Route::get('user/{id}','TestThreeController@show');

	//Multiple Route Parameters
	Route::get('hellouser/{name}/{position}/{city}','TestOneController@user');

	//BackEnd
	Route::group(['middleware'=> 'role:admin','prefix' => 'backside','as' => 'backside.'],function(){ 
	Route::resource('/category','CategoryController');
	Route::resource('/subcategory','subcategoryController');
	Route::resource('/brand','brandController');
	Route::resource('/item','itemController');
});
