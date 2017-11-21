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
                    ->select('showfilm.id','showfilm.time','showfilm.status','roominfo.roomname','film.filmname')
                    ->get();
        echo "<pre>";
        var_dump($res);die;

        return view('/FilmAdmins/FilmTicket/index',['res'=>$res]);
    }
}
