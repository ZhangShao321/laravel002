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

Event::listen('illuminate.query',function($query){
     var_dump($query);
 }); 



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
    Route::get('FilmLogin','FilmLoginController@index');
    //电影院登录验证码
    Route::get('FilmCode','FilmLoginController@code');
    //处理登录
    Route::post('doAction','FilmLoginController@doAction');

    //退出登录
    Route::get('outlogin','FilmLoginController@outlogin');

    Route::group(['middleware'=>'filmlogin'],function(){



    //电影院首页
    Route::get('index','FilmUserController@index');
    //电影院logo修改
    Route::get('Profile','FilmUserController@Profile');
    //执行图片修改
    Route::post('dopro','FilmUserController@doPro');





    //电影院信息
    Route::get('info','FilmUserController@FilmInfo');

    //影片管理
    Route::get('filmMsg','FilmMsgController@index');
    Route::get('filmMsgAdd','FilmMsgController@add');
    //处理影片
    Route::post('doAdd','FilmMsgController@doAdd');
    //编辑页面
    Route::get('edit','FilmMsgController@edit');
    //处理更新
    Route::post('update','FilmMsgController@update');
    //删除
    Route::get('delete','FilmMsgController@delete');


    //放映管理
    Route::get('filmShow','FilmShowController@index');
    Route::get('filmShowAdd','FilmShowController@add');

    //钱包
    Route::get('money','FilmMoneyController@index');

     //测试
    Route::get('login','TestController@index');
    Route::get('test','TestController@doAction');
    Route::get('te','TestController@test');
    Route::post('panduan','TestController@login');

    //影厅
    Route::get('/room/add','FilmRoomController@add');
    Route::post('/room/insert','FilmRoomController@insert');
    Route::get('/room/list','FilmRoomController@index');
    Route::post('/room/seat','FilmRoomController@seat');
    Route::get('/room/edit/{id}','FilmRoomController@edit');
    Route::post('/room/update/{id}','FilmRoomController@update');
    Route::get('/room/delete/{id}','FilmRoomController@delete');
    Route::post('/room/work','FilmRoomController@work');
    Route::post('/room/free','FilmRoomController@free');

   
    });




});







//===============================前台信息=============================


//前台路由组
Route::group(['prefix' => 'homes', 'namespace' => 'Homes'], function(){

	//前台首页
	Route::get('index','HomesController@index');

	//电影列表页
	Route::get('filmlist','HomesController@filmlist');

	//电影详情页
	Route::get('filmdetail','HomesController@filmdetail');

	//电影院列表
	Route::get('cinemalist','HomesController@cinemalist');

	//电影院详情
    Route::get('cinemadetail','HomesController@cinemadetail');

    //申请商户
	Route::get('add','HomesController@add');
    Route::post('store','HomesController@store');
});