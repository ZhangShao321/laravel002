<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

<<<<<<< HEAD
use Gregwar\Captcha\CaptchaBuilder;
use App\Http\Model\user; 
use Session;
use Hash;
=======
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Flc\Alidayu\Requests\IRequest;
use Session;

use Gregwar\Captcha\CaptchaBuilder;

>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    
    //加载登录页面
=======
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
    public function index()
    {
        //
        return view('admin.login');
    }
   
<<<<<<< HEAD

   //执行登录的方法
    public function dologin(Request $request)
    {

           $res = $request->except('_token');
           // var_dump($res);
           // $uname=DB::table('user')->where('phone',$res['phone'])->first();
           $uname=user::where('phone',$res['phone'])->first();
             // var_dump($uname);
     
            // 判断数据库有没有这个用户
         if(!$uname){
              return redirect('/admin/login')->with('msg','没有此用户');
              die;
           }

            //判断用户权限
          if($uname->auth=='0'){
              return redirect('/admin/login')->with('msg','你无权登录');
           }

           if($uname->status=='0'){
              return redirect('/admin/login')->with('msg','管理员状态未开启');
           }

           //判断输入的密码和数据库的密码是否一致
          // if(!Hash::check($res['password'],$uname->password)){
            if($res['password']!=$uname->password){
                return redirect('/admin/login')->with('msg','密码输入错误');
           }

           //判断验证码是否正确
            if(session('vcode')!=$res['code']){
                return redirect('/admin/login')->with('msg','验证码输入错误');
           }

                    
           //存session
           session(['aid' => $uname->id]);
           // $request->session()->put('aid',$uname->id);

           return redirect('/admin/index');
    }

    //验证码
=======
   
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
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
