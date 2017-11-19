<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\cinema;
class FilmUserController extends Controller
{
    //
	//电影院后台首页
	public function index()
	{
		return view('FilmAdmins.index');
	} 

	//电影院信息
    public function FilmInfo()
    {
        return view('FilmAdmins.FilmUser.info');
    }


    //商户logo

    public function Profile()
    {
         $res = cinema::find(1);

    	return view('FilmAdmins.FilmUser.Profile',['res'=>$res]);
    }


    //执行修改
    public function doPro(Request $request)
    {

             //先删除原先的图片

            //1,先查询
            $find = cinema::find(1);
            //2,判断图片是否存在
            //存在就删除
            if(file_exists($find->clogo))
             {
                unlink($find->clogo);
             }
  

            	$res = $request->only(['clogo']);

            	// //判断文件是否上传
                if($request -> hasFile('clogo'))
                {
                    //文件名
                    $name = rand(1111,9999).time();

                    //获取后缀名
                    $jpg = $request -> file('clogo')->getClientOriginalExtension();
                   var_dump($jpg);

                    //移动图片
                    $request ->file('clogo') -> move('./public/FilmPublic/Uploads',$name.'.'.$jpg);
                }

                $clogo = './public/FilmPublic/Uploads/'.$name.'.'.$jpg;

                $info =cinema::find(1); 
                $info->clogo = "{$clogo}";
                if($info->save())
                {
                    echo "修改成功";
                    return redirect('/FilmAdmins/Profile')->with('msg','修改成功');


                }else{
                    
                    return back();

                }
   
    }




    //修改密码





    






    


    
}
