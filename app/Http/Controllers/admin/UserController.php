<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class UserController extends Controller
{
    public function index(Request $request)
    {
        //
       
        $res = DB::table('user')
                ->where('username','like','%'.$request->input('search').'%')
                ->paginate($request->input('num',10));


        // $res=DB::table('user')->paginate(5);
        return view('admin.user.index',['res'=>$res],['request'=>$request]);

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
            //表单验证
        $this->validate($request, [
            'username' => 'required|regex:/^\w{8,16}$/',
            'password' => 'required|regex:/^\S{6,16}$/',
            'repass' => 'same:password',
            'email' => 'required|email',
            'phone' => 'required|regex:/^1[34578]\d{9}$/'
            
       
        ],[
            'username.required'=>'用户名不能为空',
            'username.regex'=>'用户名格式不正确',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一样',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确'

        ]);

        //文件上传
        if($request->hasFile('profile')){

            //修改名字
            $name = rand(1111,9999).time();
            //获取后缀
            $suffix = $request->file('profile')->getClientOriginalExtension();
            //移动图片
            $r =$request->file('profile')->move('./Upload',$name.'.'.$suffix);
        }


         $res = $request->except('_token','profile','repass');

         $res['profile']='/Upload/'.$name.'.'.$suffix;
         // var_dump($res);

            
          $res['password']=Hash::make($res['password']);


         //插入数据库
         $sql=DB::table('user')->insert($res);

        // var_dump($res);
         if($sql){

                return redirect('/admin/user');
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
        $res=DB::table('user')->where('id',$id)->first();
        
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
        //
       $res=DB::table('user')
        ->where('id',$id)
        ->update($request->except('_token','_method'));
        
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
        //
        echo $id;
        //删除
        $res=DB::table('user')->where('id',$id)->delete();
       if($res){
            return redirect('/admin/user')->with('删除成功');
        }else{
            return back();
        }
        
       
    }
}
