<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomesController extends Controller
{
    //主页
    public function index()
    {
    	return view('homes/index');
    }

    //电影列表
    public function filmlist()
    {
    	return view('homes/filmlist');
    }

    //电影详情页
    public function filmdetail()
    {
    	return view('homes/filmdetail');
    }

    //电影院列表
    public function cinemalist()
    {
    	return view('homes/cinemalist');
    }

    //电影院详情
    public function cinemadetail()
    {
    	return view('homes/cinemadetail');
    }
}
