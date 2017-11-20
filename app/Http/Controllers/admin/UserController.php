<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use DB;
use Hash;
class UserController extends Controller
{
    public function index()
    {
        //
        $res = user::all();
        // echo "<pre>";
        // var_dump($res);

        return view('admin.user.index',['res'=>$res]);
        
        // return view('admin.user.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加用户表单
         return view('admin.user.add');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {

        $input = $request->except('_token','_method');

        $input['lastlogin'] = time();
        $input['password'] = Hash::make($input['password']);
        // var_dump($input);die;
        $res = user::insert($input);
        // $res = DB::table('user')->insert($input);
        // var_dump($res);die;

        if($res){
            return redirect('admin/user/');
        }else{
            return back();
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
        // var_dump($id);
        $res = user::find($id);
        // echo "<pre>";
        // var_dump($res);
        return view('admin.user.edit',['res'=>$res]);
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

        // echo "<pre>";
        $input = $request->except('_token','_method');
        
        // var_dump($input);die;
        $res = user::find($id);
        // var_dump($id);die;   
        // $ress = user::where('id',$id)->update($input);
        $res = DB::table('user')->where('id',$id)->update($input);

        // var_dump($res);

        // var_dump($res);die;

        if($res){
            return redirect('/admin/user');
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
        
        // var_dump($id);
        //  //删除
        // $res = user::delete($id);

        // var_dump($res);die;
        $res=DB::table('user')->where('id',$id)->delete();

        // var_dump($res);die;
         if($res){
             return redirect('admin/user/')->with('删除成功');
         }else{
             return back();
         }
          
       
    }
}
