<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilmRoomController extends Controller
{

	//添加影厅页面
    public function add()
    {
    	return view('/FilmAdmins/FilmRoom/index');
    }

    //执行添加
    public function insert()
    {
    	
    }
}
