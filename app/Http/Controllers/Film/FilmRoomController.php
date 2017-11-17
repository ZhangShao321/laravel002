<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class FilmRoomController extends Controller
{
    public function add()
    {
        return view('/FilmAdmins/FilmRoom/add');
    }

    public function insert(Request $request)
    {
        //接收数据
        $data = $request->except('_token');
        
        //判断是否丢包
        if(empty($data['roomname']) && empty($data['roomtype'])){

            return view('/FilmAdmins/FilmRoom/add');
        }

        //补全信息
        $data['cid'] = session('cid') ?? 1;
        $data['rtime'] = time();

        //添加到数据库
        $id = DB::table('roominfo').insertGetId($data);

        //判断是否添加成功
        if($id){

            return view('/FilmAdmins/FilmRoom/seat', ['id'=>$id]);
        } else {

            return back();
        }

        // var_dump($data);
    }
}
