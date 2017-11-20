<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\config;

class NetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $res=config::all();
        // $res=DB::table('config')->get();
        // dd($res);
        return view('admin.net.index',compact('res'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
             
        //判断是否有文件上传
        if($request->hasFile('logo')){

            //获取文件名
            $name=rand(1111,9999).time();

            //获取文件名后缀
            $hz=$request->file('logo')->getClientOriginalExtension();

            //移动文件
            $request->file('logo')->move('./adminsUplode',$name.'.'.$hz);
        }else{

             return back()->with('msg','请上传文件!');
        }


        $res = $request->except('_token','_method');

       //修改上传logo的名字
        $res['logo'] = '/adminsUplode/'.$name.'.'.$hz;


        //执行修改
        $sql=config::where('id',$id)->update($res);

        if($sql){

            return redirect('/admin/net')->with('msg','修改成功');
        
        }else{

            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
