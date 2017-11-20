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
Route::group(['prefix'=>'admin','namespace'=>'admin'], function () {


		//进入后台的首页
		Route::get('/index', 'CeshiController@index');

		//后台user用户管理
		Route::resource('user','UserController');

		//后台guanliyuan管理员管理
		Route::resource('guanliyuan','GuanliyuanController');
		
		//后台商户(电影院)管理
		Route::resource('cinema','CinemaController');

		//后台申请管理
		Route::resource('req','RequestController');

		//后台影视分类s
		Route::resource('/film','FilmController');

		//后台轮播图管理
		Route::resource('/lunbo','LunboController');

		//后台板块管理
		Route::resource('/block','BlockController');

		//后台网站配置
		Route::resource('/net','NetController');


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