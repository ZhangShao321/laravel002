<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilmShowController extends Controller
{
    //放映信息
    public function index()
    {
    	return view('FilmAdmins.FilmShow.FilmShowList');
    }


    //放映添加
    public function add()
    {
    	return view('FilmAdmins.FilmShow.FilmShowAdd');

    }
}
