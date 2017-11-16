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


//=======================后台信息===================================


//后台路由组
Route::group([], function(){


});



//====================电影院信息=================================



//电影院登录
Route::get('/FilmLogin','FilmLoginController@filmindex');
//电影院登录验证码
Route::get('/FilmLogin/code','FilmLoginController@code');

//电影院验证码
Route::get('/Film','FilmLoginController@code');


//电影院路由组
//访问 prefix -> resources 中view视图中的 文件夹名
// namespace  是控制器文件夹名 
//  php artisan make:controller Film/FilmLoginController --plain

Route::group(['prefix' => 'FilmAdmins', 'namespace' => 'Film'],function(){
    //电影院首页
    Route::get('index','FilmUserController@index');
    //电影院信息
    Route::get('info','FilmUserController@FilmInfo');

    Route::get('/filmroom/add','FilmRoomController@add');



});


// Route::get('/login','FilmRoomController@a');

// Route::post('/login','FilmRoomController@login');


Route::get('login','RoomController@index');

Route::post('login','RoomController@code');


Route::post('logins/login','RoomController@login');






//===============================前台信息=============================







//前台路由组
Route::group(['prefix' => 'homes', 'namespace' => 'Homes'], function(){

	//首页
	Route::get('index','HomesController@index');

	//电影列表页
	Route::get('filmlist','HomesController@filmlist');

	//电影详情页
	Route::get('filmdetail','HomesController@filmdetail');

	//电影院列表
	Route::get('cinemalist','HomesController@cinemalist');

	//电影院详情
	Route::get('cinemadetail','HomesController@cinemadetail');
});