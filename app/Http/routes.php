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

//404找不到页面
Route::get('/404',function(){
	abort(404);
});



//后台路由组
Route::group([], function(){


});





//电影院路由组 'middleware'=>'filelogin'
Route::group([], function(){
    	
     Route::get('/Filmshow','FilmUserController@index');




});






//前台路由组
Route::group([], function(){


});