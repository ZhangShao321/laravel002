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



		
		//prefix路由群组中的所有路由包含统一前缀
		//namepace控制器位于App\Http\Controllers命名空间下
		//
		//后台登录页面
		Route::get('/admin/login','admin\AdminLoginController@index'); 
		//执行登录的方法
		Route::post('/admin/dologin','admin\AdminLoginController@dologin');
		//生成登录验证码 
		Route::get('/admin/code','admin\AdminLoginController@code');

	//后台路由组 中间件
	Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'adminlogin'], function () {

			//进入后台的首页
			Route::get('/index', 'CeshiController@index');

			//后台user用户管理
			Route::resource('/user','UserController');


			//后台管理员管理
			Route::resource('/guanliyuan','GuanliyuanController');
			//后台管理员修改状态
			// Route::post('/guanliyuan/zt','GuanliyuanController@zt');


			//后台商户(电影院)管理
			Route::resource('/ciname','CinemaController');

			//后台申请管理
			Route::resource('/request','RequestController');

			//后台影视分类
			Route::resource('/film','FilmController');

			//后台轮播图管理
			Route::resource('/lunbo','LunboController');

			//后台板块管理
			Route::resource('/block','BlockController');

			//后台网站配置
			Route::resource('/net','NetController');

	});



//电影院路由组 
//  php artisan make:controller Film/FilmLoginController --plain


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



            //影厅


            Route::get('/room/add','FilmRoomController@add');
            Route::post('/room/insert','FilmRoomController@insert');
            Route::get('/room/list','FilmRoomController@index');
            Route::post('/room/seat','FilmRoomController@seat');
            Route::get('/room/edit/{id}','FilmRoomController@edit');
            Route::post('/room/update/{id}','FilmRoomController@update');
            Route::get('/room/delete/{id}','FilmRoomController@delete');



     });
   





});







//===============================前台信息=============================





Route::group(['prefix' => 'homes', 'namespace' => 'Homes'], function(){

	//前台首页
	Route::get('index','HomesController@index');

	//电影列表页
	Route::get('filmlist','HomesController@filmlist');

	//电影详情页
	Route::get('filmdetail','HomesController@filmdetail');




	//电影院详情
    Route::get('cinemadetail','HomesController@cinemadetail');

    //申请商户
	Route::get('add','HomesController@add');
    Route::post('store','HomesController@store');

});