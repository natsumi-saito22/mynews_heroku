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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); 
     Route::get('news', 'Admin\NewsController@index');
     Route::get('news/edit','Admin\NewsController@edit');
     Route::post('news/edit','Admin\NewsController@update');
     Route::get('news/delete', 'Admin\NewsController@delete');
     
}); 


Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create','Admin\ProfileController@create')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit','Admin\ProfileController@update')->middleware('auth');
   
});


//課題３
// Route::get('XXX', 'XXX\AAAController@bbb');

//課題4
// Route::group(['prefix' => 'admin','middleware'=>'auth'], function(){
//     Route::get('profile/create','Admin\ProfileController@add');
//     Route::get('profile/edit','Admin\ProfileController@edit');
//     Route::post('profile/create','Admin\ProfileController@create');
//     Route::post('profile/edit','Admin\ProfileController@update');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

