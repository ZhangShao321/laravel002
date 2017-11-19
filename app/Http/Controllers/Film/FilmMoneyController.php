<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilmMoneyController extends Controller
{
    //

    public  function index()
    {
    	return view('FilmAdmins.Money.FilmMoney');
    }
}
