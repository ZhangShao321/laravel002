<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Flc\Alidayu\Requests\IRequest;
use Session;
use DB;
use Gregwar\Captcha\CaptchaBuilder;


class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //加载登录页面
    public function index()
    {
        //
        return view('admin.login');
    }
   

   //执行登录的方法
    public function dologin(Request $request)
    {
       $res = $request->except('_token');
       var_dump($res);
       $uname=DB::table('user')->where('phone',$res['phone'])->first();
        var_dump($uname);
       // 
       if(!$uname && $uname->auth!=='1'){
          return redirect('/admin/login')->with('msg','你无权登录');
       }

       /*if(!Hash::password){

       }*/

       
       echo "成功";
    }

    //验证码
    public function code()
    {

        // var_dump(session('uid'));die;

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
