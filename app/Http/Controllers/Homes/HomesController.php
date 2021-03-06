<?php

namespace App\Http\Controllers\Homes;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\cinema;
use App\Http\Model\cininfo;
use Hash;
use DB;

class HomesController extends Controller
{
    //主页
    public function index()
    {
    	return view('homes/index');
    }

    //电影列表
    public function filmlist()
    {
    	return view('homes/filmlist');
    }

    //电影详情页
    public function filmdetail()
    {
    	return view('homes/filmdetail');
    }

    //电影院列表
    public function cinemalist()
    {
    	return view('homes/cinemalist');
    }

    //电影院详情
    public function cinemadetail()
    {
    	return view('homes/cinemadetail');
    }

    //申请商户
    public function add()
    {
        return view('homes/shenqing');
    }

    public function store(Request $request)
    {
        $res = $request->except('_token','city','area','address');
        $res1 = $request->only('city','area','address');

        $res['password'] = Hash::make($res['password']);


        if($request -> hasFile('license'))
        {

           //文件名
            $name = rand(11111,99999).time();

            //获取后缀名
            $jpg = $request -> file('license')->getClientOriginalExtension();
          
            //移动图片
            $request ->file('license') -> move('./homes/Uploads',$name.'.'.$jpg); 
        }  

        $license = './homes/Uploads/'.$name.$name.'.'.$jpg;
        $res['license'] = $license;


        DB::beginTransaction();

        $cinema = cinema::insert($res);
        $cininfo = cininfo::insert($res1);

        //判断
        if($cinema && $cininfo)
        {   
            DB::commit();
            return redirect('/homes/index'); 

        }else{
            
            DB::rollback();
        }


    }    
        
        
}
