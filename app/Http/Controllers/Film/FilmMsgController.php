<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\film;

class FilmMsgController extends Controller
{
    //影片管理
    public  function index()
    {

       $film =  film::get();


        return view('FilmAdmins.FilmMag.FilmMsgList',['film'=> $film]);
        
    }

    public function add()
    {
        return view('FilmAdmins.FilmMag.FilmMsgAdd');

    	
    }



}
