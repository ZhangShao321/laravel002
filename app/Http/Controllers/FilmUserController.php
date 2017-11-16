<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilmUserController extends Controller
{
    //电影院后台首页
	public function index()
	{
		return view('FilmAdmins.index');
	} 

	  //电影院信息填写
    public function FilmInfo()
    {
        return view('FilmAdmins.FilmUser.info');
    }


	



}
