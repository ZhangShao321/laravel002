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

        $film = showfilm::join('film','film.id','=','showfilm.fid')
                    ->select('showfilm.*','film.filmname')
                    ->get();


        $room = showfilm::join('roominfo','roominfo.id','=','showfilm.rid')
                    ->select('roominfo.*','roominfo.roomname','showfilm.status')
                    ->get();

                
        // select showfilm.id,showfilm.time,film.filmname,roominfo.roomname,cinema.cinema where showfilm.fid=film.id,showfilm.cid=roominfo.rid,showfilm.rid=roominfo.id 
        
       

    	return view('FilmAdmins.FilmShow.FilmShowList',['res'=>$res,'film'=>$film,'room'=>$room]);
    }


    //放映添加
    public function add()
    {
          
          $cinema = cinema::get();
          $roominfo = roominfo::where("status",1)->get();

          $film = film::get();

    	return view('FilmAdmins.FilmShow.FilmShowAdd',['film'=>$film,'cinema'=>$cinema,'room'=>$roominfo]);

    }

    //处理添加放映
    public function  doadd(Request $request)
    {
        // echo "<pre>";
        $info = $request->except('_token');

        $this->validate($request, [
        'time' => 'required',
        'time' => "required|regex:/\d{4}[-\/]\d{2}[-\/]\d{2}\s([0-1][0-9]):([0-5][0-9]):([0-5][0-9])/"
        
        ],[
            'time.required'=>'时间不能为空',
            'time.regex'=>'时间格式错误',
            ]
        );
        
        //时间格式  ([0-1][0-9]|(2[0-3])):([0-5][0-9]):([0-5][0-9])$#
        

         $res = showfilm::insert($info);

         if($res)
         {
            return redirect('/FilmAdmins/filmShow')->with('msg','添加成功');

         }else{
             return back()->withInput($request->except('_token'));

         }
     

        // echo "这是添加放映";
    }















}
