<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilmMsgController extends Controller
{
    //影片管理
    public  function index()
    {
    	return view('FilmAdmins.FilmMag.FilmMsgList');
    }

    public function add()
    {
    	return view('FilmAdmins.FilmMag.FilmMsgAdd');
    }



}
