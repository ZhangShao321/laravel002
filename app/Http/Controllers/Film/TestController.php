<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;



use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Flc\Alidayu\Requests\IRequest;

// use  DB;

use App\Http\Model\user;

class TestController extends Controller
{
    //

    public function index()
    {
    	return view("FilmAdmins.FilmUser.test");
    }


    public function doAction(Request $request)
    {
    	$phone = $request->input('phone');
    	// $code = $request->input('code');
    
   		// 配置信息
			$config = [
			    'app_key'    => '23470922',
			    'app_secret' => '665345491559f6f682a65f3bf2e08644',
			    // 'sandbox'    => true,  // 是否为沙箱环境，默认false
			];


			// 使用方法一
			$client = new Client(new App($config));
			$req    = new AlibabaAliqinFcSmsNumSend;
			$code =  rand(100000, 999999);
			session(['code' => $code]);
			$req->setRecNum($phone)
			    ->setSmsParam([
			        'number' => $code
			    ])
			    ->setSmsFreeSignName('兄弟连')
			    ->setSmsTemplateCode('SMS_75835101');

			$resp = $client->execute($req);

			// dd($resp);
			// echo $phone;
			
			if($resp->result->model)
			{
				return "发送成功";
				//print_r($resp);
				

			}else{
				return "发送失败!";
			}

			

    }




    public function login(Request $request)
    {

    		$scode = $request -> session() -> get('code');
    		$code = $request -> input('code');

    		if($scode == $code )
    		{
    			return "登录成功!";
    		}else{
    			return "登录失败!";
    		}


    		
    }



    //测试是数据库

    public function  test()
    {
		//注意别忘了  use App\Http\Model\user;
    	 
    	// $res = user::where('id','1')->first();
    	// echo "<pre>";
    	// var_dump($res->phone);


      //   $info = user::findOrFail(1);
      //   $info -> phone="1234567890";
      //   if($info -> save())
      //   {
      //       echo "修改成功";

      //   }else{
      //       echo "修改失败";
      //   }
       
      // echo "<pre>";
        // var_dump($info);

    }

}
