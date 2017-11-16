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
<<<<<<< HEAD
     Route::get('index','FilmUserController@index');
     //电影院列表
     Route::get('list','FilmUserController@listFilm');
    //电影院信息
    Route::get('info','FilmUserController@FilmInfo');

    Route::get('/filmroom/add','FilmRoomController@add');




    //影片管理
    Route::get('filmMsg','FilmMsgController@index');
    Route::get('filmMsgAdd','FilmMsgController@add');






    //放映管理
    Route::get('filmShow','FilmShowController@index');
    Route::get('filmShowAdd','FilmShowController@add');






     //测试
     Route::get('/test/login','TestController@index');
     Route::get('test','TestController@doAction');
     Route::post('panduan','TestController@login');
=======
    Route::get('index','FilmUserController@index');
    //电影院信息
    Route::get('info','FilmUserController@FilmInfo');
>>>>>>> 9f3424fc67d18ef046fd4dfbf075bda35c890098

    Route::get('/filmroom/add','FilmRoomController@add');

    Route::post('/filmroom/insert','FilmRoomController@insert');


<<<<<<< HEAD

=======
});


<<<<<<< HEAD
// Route::get('/login','FilmRoomController@a');
>>>>>>> 9f3424fc67d18ef046fd4dfbf075bda35c890098

// Route::post('/login','FilmRoomController@login');


<<<<<<< HEAD
	
=======
Route::get('login','RoomController@index');
>>>>>>> 9f3424fc67d18ef046fd4dfbf075bda35c890098

Route::post('login','RoomController@code');


Route::post('logins/login','RoomController@login');
=======

>>>>>>> b48d17529a3ca20f6027faebc9dccc4e52ed178f






//===============================前台信息=============================







//前台路由组
Route::group([], function(){


});