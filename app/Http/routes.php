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







//电影院路由组 
//  php artisan make:controller Film/FilmLoginController --plain

Route::group(['prefix' => 'FilmAdmins', 'namespace' => 'Film'],function(){

     
     //电影院登录
    Route::get('FilmLogin','FilmLoginController@index');
    //电影院登录验证码
    Route::get('FilmCode','FilmLoginController@code');
    //处理登录
    Route::post('doAction','FilmLoginController@doAction');



    //电影院首页
    Route::get('index','FilmUserController@index');
    //电影院列表
    Route::get('list','FilmUserController@listFilm');
    //电影院信息
    Route::get('info','FilmUserController@FilmInfo');

    //影片管理
    Route::get('filmMsg','FilmMsgController@index');
    Route::get('filmMsgAdd','FilmMsgController@add');

    //放映管理
    Route::get('filmShow','FilmShowController@index');
    Route::get('filmShowAdd','FilmShowController@add');



    //钱包
    Route::get('money','FilmMoneyController@index');

     //测试
    Route::get('/test/login','TestController@index');
    Route::get('test','TestController@doAction');
    Route::post('panduan','TestController@login');

    //影厅

    Route::get('/room/add','FilmRoomController@add');
    Route::post('/room/insert','FilmRoomController@insert');
    Route::get('/room/list','FilmRoomController@index');
    Route::post('/room/seat','FilmRoomController@seat');
    Route::get('/room/edit/{id}','FilmRoomController@edit');
    Route::post('/room/update/{id}','FilmRoomController@update');
    Route::get('/room/delete/{id}','FilmRoomController@delete');



});







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