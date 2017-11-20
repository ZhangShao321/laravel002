<?php

namespace App\Http\Controllers\admin;


use Hash;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\user;


class GuanliyuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $res=user::where('auth','1')->get();

        return view('admin.guanliyuan.index',compact('res'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.guanliyuan.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         //表单验证
        $this->validate($request, [
            'phone' => 'required|regex:/^\w{8,16}$/',
            'password' => 'required|regex:/^\S{6,16}$/',
            // 'email' => 'required|email',
            // 'phone' => 'required|regex:/^1[34578]\d{9}$/'
            // 'nickName' => 'required|regex:/^\w{8,16}$/',
            
       
        ],[
            'phone.required'=>'用户名不能为空',
            'phone.regex'=>'用户名格式不正确',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',         

        ]);


        $res=$request->except('_token');
       
        $res['password']=Hash::make($res['password']);

        $res['lastlogin']=time();
        // dd($res);
       
       $sql=user::insert($res);  
        // $sql=DB::table('user')->insert($res);

        if($sql){
            return redirect('/admin/guanliyuan');
        }else{
            return back()->withInput();
        }

        


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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       
        $sql = user::where('id',$id)->delete();
        if($sql){
            return redirect('/admin/guanliyuan')->with('删除成功');
        }else{
            return back();
        }
    }


    //后台管理员状态修改
    public function zt(Request $request)
    {
        // $sql=user::where('id',$_GET['id']);

       /* var_dump($request->all());

        die;
        if($a['status']=='1'){

             $a['status']=='0';  
        }else{

            $a['status']=='1';  
        }
        */
         // update插入数据库
      



    }


}
