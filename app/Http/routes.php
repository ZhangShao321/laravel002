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
//prefix路由群组中的所有路由包含统一前缀
//namepace控制器位于App\Http\Controllers命名空间下
//
		//后台登录页面
		Route::get('/admin/login','admin\AdminLoginController@index'); 
		//执行登录的方法
		Route::post('/admin/dologin','admin\AdminLoginController@dologin');
		//生成登录验证码 
		Route::get('/admin/code','admin\AdminLoginController@code');

	Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'adminlogin'], function () {

			//进入后台的首页
			Route::get('/index', 'CeshiController@index');

			//后台user用户管理
			Route::resource('/user','UserController');
			

			//后台商户(电影院)管理
			Route::resource('/ciname','CinemaController');



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

    Route::get('/add','FilmRoomController@add');



});


Route::get('/login','FilmRoomController@a');

Route::post('/login','FilmRoomController@login');











//===============================前台信息=============================







//前台路由组
Route::group([], function(){


});