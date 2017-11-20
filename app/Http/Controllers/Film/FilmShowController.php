<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\film;
use App\Http\Model\cinema;
use App\Http\Model\roominfo;
use App\Http\Model\showfilm;

class FilmShowController extends Controller
{
    //放映信息
    public function index()
    {
       

        $res = showfilm::join('cinema','cinema.id','=','showfilm.cid')
                    ->select('showfilm.*','cinema.cinema','showfilm.time')
                    ->get();




        $room = showfilm::join('roominfo','roominfo.id','=','showfilm.rid')
                    ->select('roominfo.*','roominfo.roomname','showfilm.status')
                    ->get();

        
        $data['time']=$res[0]->time;
        $data['id'] = $res[0]->id;  //放映id
        $data['cinema']=$res[0]->cinema;
        $data['roomname']=$room[0]->roomname;
        $data['status']=$res[0]->status;
        // echo "<pre>";
        
        // var_dump($res);

    	return view('FilmAdmins.FilmShow.FilmShowList',['data'=>$data]);
    }


    //放映添加
    public function add()
    {
    	return view('FilmAdmins.FilmShow.FilmShowAdd');

    }
}
