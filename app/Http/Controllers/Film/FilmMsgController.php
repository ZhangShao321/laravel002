<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\film;
use Hash;

class FilmMsgController extends Controller
{
    //影片管理
    public  function index(Request $request)
    {

       // $film =  film::get();

      // $film = film::where('filmname','like','%5%')->paginate(3);
     $film = film::where('filmname','like','%'.$request->input('seach').'%')->paginate($request->input('num',10));


        return view('FilmAdmins.FilmMag.FilmMsgList',['film'=> $film,'request'=>$request]);
        
    }

    public function add()
    {
        return view('FilmAdmins.FilmMag.FilmMsgAdd');

    	
    }

    //处理添加
    public  function doAdd(Request $request)
    {
        
        // 时间支持格式"2017-08-08","2017/08/08",
                
        $this->validate($request, [
        'filmname' => 'required',
        'showtime' => 'required|regex:/\d{4}[-\/]\d{2}[-\/]\d{2}/',  //
        'keywords' => 'required',
        'director' => 'required',
        'protagonist' => 'required',
        'filmtime' => 'required',
        'price' => 'required',
        'filepic' => 'required',
        'summary' => 'required',
        
        
        ],[
            'filmname.required'=>'影片名称不能为空',
            'showtime.regex'=>'上映日期格式错误',
            'showtime.required'=>'上映日期不能为空',
            'keywords.required'=>'关键字不能为空',
            'director.required'=>'导员不能为空',
            'protagonist.required'=>'主演不能为空',
            'filmtime.required'=>'时长不能为空',
            'price.required'=>'价格不能为空',
            'filepic.required'=>'图片不能为空',
            'summary.required'=>'简介不能为空',
            ]
        );
     
        $info = $request->except(['_token','filepic']);
        $res = $request->only(['filepic']);
      

                // //判断文件是否上传
                if($request -> hasFile('filepic'))
                {
                    //文件名
                    $name = rand(1111,9999).time();
                   

                    //获取后缀名
                    $jpg = $request -> file('filepic')->getClientOriginalExtension();
                 

                    //移动图片
                 $request ->file('filepic') -> move('./public/FilmPublic/Uploads',$name.'.'.$jpg);
                }
                 $filepic = './public/FilmPublic/Uploads/'.$name.'.'.$jpg;
                 // var_dump($filepic);

                  $info['filepic'] = $filepic;



                  //链接数据库
                  $db = film::insert($info);


                  if($db)
                  {
                    return redirect('/FilmAdmins/filmMsg')->with('msg','添加成功');

                  }else{

                        //添加失败的话,把上传的图图片
                     if(file_exists($filepic))
                         {
                            unlink($find->clogo);
                         }
                     return back()->withInput($request->except('_token','filepic'));
                    // return back();
                  }
    }

    //修改页面

    public function edit(Request $request)
    {
      // return "这是修改页面";
      
      $id = $request->only('id');
      $res = film::find($id)[0];

      return  view('FilmAdmins.FilmMag.FilmMsgEdit',['res'=>$res]);
    }




//修改信息

    public function update(Request $request)
    {
        $this->validate($request, [
        'filmname' => 'required',
        'showtime' => 'required|regex:/\d{4}[-\/]\d{2}[-\/]\d{2}/',  //
        'keywords' => 'required',
        'director' => 'required',
        'protagonist' => 'required',
        'filmtime' => 'required',
        'price' => 'required',
        'summary' => 'required',
        
        
        ],[
            'filmname.required'=>'影片名称不能为空',
            'showtime.regex'=>'上映日期格式错误',
            'showtime.required'=>'上映日期不能为空',
            'keywords.required'=>'关键字不能为空',
            'director.required'=>'导员不能为空',
            'protagonist.required'=>'主演不能为空',
            'filmtime.required'=>'时长不能为空',
            'price.required'=>'价格不能为空',
            'summary.required'=>'简介不能为空',
            ]
        );

      $id = $request->only('id');
      $res =  $request->except('id','_token','id','filepic');

             // //判断文件是否上传
              if($request -> hasFile('filepic'))
              {

                $find = film::find($id);
                //2,判断图片是否存在
                //存在就删除
                if(file_exists("{$find[0]->filepic}"))
                 {
                    unlink("{$find[0]->filepic}");
                 }
                      //文件名
                      $name = rand(1111,9999).time();
                      //获取后缀名
                      $jpg = $request -> file('filepic')->getClientOriginalExtension();
                      //移动图片
                       $request ->file('filepic') -> move('./public/FilmPublic/Uploads',$name.'.'.$jpg);

                       $filepic = './public/FilmPublic/Uploads/'.$name.'.'.$jpg;
                       // var_dump($filepic);
                       $res['filepic'] = $filepic;

              }

             $dd =film::where('id',$request->only('id'))->update($res);
            

              if($dd)
               {
                   return redirect('/FilmAdmins/filmMsg')->with('msg','修改成功');
               }else{

                    return back();
               }
     }



    //信息删除
     public function delete(Request $request)
     {
        echo "这是删除";
     }

               















      
       

     
   


    //这是删除页面





}
