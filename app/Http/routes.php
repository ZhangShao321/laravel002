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







//电影院路由组 
//  php artisan make:controller Film/FilmLoginController --plain

Route::group(['prefix' => 'FilmAdmins', 'namespace' => 'Film'],function(){

     //电影院登录
    Route::resource('FilmLogin', 'FilmLoginController');
      //电影院登录验证码
    Route::get('FilmCode','FilmLoginController@code');

    Route::get('FilmLogin','FilmLoginController@index');
  
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

    Route::get('/filmroom/add','FilmRoomController@add');
    Route::get('/filmroom/list','FilmRoomController@index');
    Route::post('/filmroom/insert','FilmRoomController@insert');


   


    


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