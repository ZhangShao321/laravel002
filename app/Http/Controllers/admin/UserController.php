<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Http\model\user;
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
use DB;
use Hash;
class UserController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request)
    {
       
       return view('admin.user.index');
=======
    public function index()
    {
        //
        $res = user::all();
        // echo "<pre>";
        // var_dump($res);

        return view('admin.user.index',['res'=>$res]);
        
        // return view('admin.user.index');
        
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加用户表单
<<<<<<< HEAD
       return view('admin.user.add');
       
=======
         return view('admin.user.add');
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


<<<<<<< HEAD
        public function store(Request $request)
        {
           
=======
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

>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
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
<<<<<<< HEAD
        
=======
        // var_dump($id);
        $res = user::find($id);
        // echo "<pre>";
        // var_dump($res);
        return view('admin.user.edit',['res'=>$res]);
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
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
<<<<<<< HEAD
       
=======

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
        
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
<<<<<<< HEAD
=======
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
          
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
       
    }
}
