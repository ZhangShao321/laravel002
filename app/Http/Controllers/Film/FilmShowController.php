<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\film;
use App\Http\Model\cinema;
use App\Http\Model\roominfo;
use App\Http\Model\showfilm;
use DB;
class FilmShowController extends Controller
{
    //放映信息
    public function index()
    {
       

          $roo = DB::select("SELECT showfilm.id,showfilm.status,showfilm.time,film.filmname,roominfo.roomname,cinema.cinema FROM showfilm left join film On showfilm.fid=film.id Left join roominfo on showfilm.Rid=roominfo.id Left join cinema On showfilm.cid=cinema.id");


         
       

         $arr = array(0=>'即将放映',1=>'正在放映',2=>'放映结束');

    	return view('FilmAdmins.FilmShow.FilmShowList',['roo'=>$roo,'arr'=>$arr]);
    }


    //放映添加
    public function add()
    {
          
          $cinema = cinema::get();
          $roominfo = roominfo::where("status",'0')->get();

          $film = film::get();

    	return view('FilmAdmins.FilmShow.FilmShowAdd',['film'=>$film,'cinema'=>$cinema,'room'=>$roominfo]);

    }

    //处理添加放映
    public function  doadd(Request $request)
    {
        // echo "<pre>";
        $info = $request->except('_token','time');
       $time = $request->only('time');
       $info['time'] = strtotime($time['time']);

         $res = showfilm::insert($info);

         if($res)
         {
            return redirect('/FilmAdmins/filmShow')->with('msg','添加成功');

         }else{
             return back()->withInput($request->except('_token'));

         }
     

    }


    public  function edit(Request $request)
    {

    	// echo "这是编辑页面";
    	// echo "<pre>";
    	 $res = DB::select("select showfilm.id,showfilm.status,showfilm.time,film.filmname,roominfo.roomname,cinema.cinema from showfilm,film,roominfo,cinema where showfilm.fid=film.id and showfilm.Rid=roominfo.id and showfilm.cid=cinema.id and showfilm.id={$request->id}");
    	 // var_dump($res);

    	  $cinema = cinema::get();
          $roominfo = roominfo::where("status",'0')->get();

          $film = film::get();
          $show = showfilm::get();

          //b用汉语判断状态
          $arr = array(0=>'即将放映',1=>'正在放映',2=>'放映结束');

 		  return view("FilmAdmins.FilmShow.FilmShowEdit",['res'=>$res,'cinema'=>$cinema,"room"=>$roominfo,"film"=>$film,'show'=>$show,'arr'=>$arr]);

    }

    //处理更新方法


    public function update(Request $request)
    {
    	echo "<pre>";
    	

    	$info = $request->except('_token','id','time'); 
      $time = $request->only('time');
      $info['time'] = strtotime($time['time']);
      $res  =showfilm::where('id',$request->only('id'))->update($info);

      if($res)
      {
          return redirect('/FilmAdmins/filmShow')->with('msg','修改成功');
      }else{


        return back();
      }

    	

    }




    public  function delete(Request $request)
    {
      $id = $request->only('id');
      // echo "<pre>";
      // $res = showfilm::find($id);

      $res = showfilm::where('id',$id)->delete();
      if($res)
      {
         echo "删除成功!";

      }else{
        return  "删除失败!";
      }
      // echo "这是删除页面";
    }














}
