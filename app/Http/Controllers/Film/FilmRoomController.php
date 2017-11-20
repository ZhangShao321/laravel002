<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\model\roominfo;
use App\Http\model\seat;

class FilmRoomController extends Controller
{



    //影厅列表
    public function index()
<<<<<<< HEAD
    {
       return view('/FilmAdmins/FilmRoom/list'); 
=======
    {   

        // $res = DB::table('roominfo')->get();
        $res = roominfo::all();

        return view('/FilmAdmins/FilmRoom/list', ['res'=>$res]); 

>>>>>>> 25ba28eb8f37d235eba55bd464d962b0d30aec1c
    }


	//添加影厅页面

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
        // $id = DB::table('roominfo')->insertGetId($data);
        $id = roominfo::insertGetId($data);

        //判断是否添加成功
        if($id){

            //引入添加座位页面
            return view('/FilmAdmins/FilmRoom/seat', ['id'=>$id]);
        } else {

            return back();
        }

        // var_dump($data);
    }

    //添加座位
    public function seat(Request $request)
    {   

        //接收数据
        $res = $request->except('_token');
        //判断是否丢包
        if(empty($res['seat']) && $res['rid']){

            return back();
        }

        //组合信息
        $res['cid'] = session('cid') ?? 1;

        //写入数据
        $id = DB::table('seat')->insertGetId($res);

        // echo $id;die;
        //判断
        if($id){
            //修改影厅表的座位id
            $aaa = DB::table('roominfo')->where('id', $res['rid'])->update(['sid'=>$id]);

            if(!$aaa){

                DB::table('seat')->where('id',$id)->delete();
                DB::table('roominfo')->where('id', $res['rid'])->delete();

                // return redirect('/FilmAdmins/room/add');
                echo '0';

            } else {

                echo '1';
                // return redirect('/FilmAdmins/room/list');
                
            }
        } else {

            return back();
        }

        // echo json_encode($res);
        // echo 11111111;
    }

    //添加修改页面
    public function edit($id)
    {
        $res = DB::table('roominfo')->where('id',$id)->first();

        return view('FilmAdmins/FilmRoom/edit', ['res'=>$res]);
    }

    //执行修改
    public function update(Request $request, $id)
    {

        $data = $request->except('_token');

        // var_dump($data);
        $res = DB::table('roominfo')->where('id',$id)->update($data);

        if($data){
            return redirect('/FilmAdmins/room/list');
        }else{
            return redirect('/FilmAdmins/room/list');
        }
    }

    //执行删除
    public function delete($id)
    {
        $data = DB::table('roominfo')->where('id',$id)->first();

        $sid = $data->sid;

        DB::beginTransaction();

        $res = DB::table('seat')->where('id',$sid)->delete();
        $res1 = DB::table('roominfo')->where('id',$id)->delete();

        if($res && $res1){

            DB::commit();
            return redirect('/FilmAdmins/room/list');
        } else {

            DB::rollback();
            return redirect('/FilmAdmins/room/list');
        }

    }

}
