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


<<<<<<< HEAD
=======
//电影院路由组 'middleware'=>'filmlogin'
Route::group([], function(){
    	
     Route::get('/Filmshow','FilmUserController@index');
>>>>>>> 789ec453382297b9ca61386a974760a779ba24fc

     Route::get('/filmroom','FilmRoomController@index');

<<<<<<< HEAD
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
=======
     Route::get('/filmroom/add','FilmRoomController@add');
>>>>>>> 789ec453382297b9ca61386a974760a779ba24fc


});


Route::get('/login','FilmRoomController@a');

Route::post('/login','FilmRoomController@login');



	//测试短信验证
    Route::get('/ceshi','TestController@yanzheng');









//===============================前台信息=============================







//前台路由组
Route::group([], function(){


});