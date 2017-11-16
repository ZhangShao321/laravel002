<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Hash;

class FilmLoginController extends Controller
{
    //

	   //电影院登录页面
	public function index()
	{
		return view('FilmAdmins.FilmUser.login');
	} 

	  //电影院信息填写
    public function code()
    {
         //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 120, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('vcode', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();

    }

    
}
