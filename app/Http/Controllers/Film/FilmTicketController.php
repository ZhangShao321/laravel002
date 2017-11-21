<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class FilmTicketController extends Controller
{
    //电影票
    public function index()
    {
        $cid = session('cid') ?? 1;

        $res = DB::table('showfilm')
                    ->join('roominfo', 'showfilm.rid','=','roominfo.id')
                    ->join('film', 'showfilm.fid','=','film.id')
                    ->select('showfilm.id','showfilm.price','showfilm.cid','showfilm.time','showfilm.status','roominfo.roomname','film.filmname')
                    ->where('showfilm.cid',1)->where('showfilm.time',1)
                    ->get();
        // echo "<pre>";
        // var_dump($res);die;

        return view('/FilmAdmins/FilmTicket/index',['res'=>$res]);
    }

    //购票
    public function shop($id)
    {
        //获取放映信息
        $res = DB::table('showfilm')->where('id',$id)->first();

        //获取影厅信息
        $seat = DB::table('roominfo')->where('id',$res->rid)->first();
        //获取座位信息
        $data = DB::table('seat')->where('id',$seat->sid)->first();

        //获取座位
        $seat = $data->seat;

        $seats = explode('#',$seat); 

        // var_dump($seat);die;

        return view('/FilmAdmins/FilmTicket/shopseat', ['data'=>$data, 'id'=>$id, 'seat'=>$seats]); 
    }

    //执行售票
    public function shopseat(Request $request,$id)
    {

        $res = DB::table('showfilm')->where('id',$id)->first();

        $data = array();

        $data['showid'] = $id;
        $data['uid'] = 0;
        $data['cid'] = $res->cid;
        $data['fid'] = $res->fid;
        $data['rid'] = $res->rid;
        $data['price'] = $res->price;
        $data['seat'] = $request->except('_token')['zuo'];
        $data['time'] = time();

        // $data = $request->except('_token');
        // echo json_encode($data);die;

        $aaa = DB::table('ticket')->insert($data);

        if($aaa){

            echo '1';
        }else{
            echo '0';
        }

    }

    public function shopseat_into(Request $request,$id)
    {
        // echo 1;die;
        $res = DB::table('ticket')->where('showid',$id)->get();

        $seat = array();
        $i = 1;
        foreach($res as $k => $v){

            $seat[$i] = $v->seat;
            $i++;
        }

        echo json_encode($seat);
    }
}
