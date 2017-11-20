@extends('admin.layout.admins')
        
@section('title','管理员列表')


@section('content')
	<div class="mws-panel grid_8">

    	<div class="mws-panel-header">

        	<span><i class="icon-table"></i>管理员列表</span>

        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                <thead>
                    <tr>

                        <th>ID</th>      
                        <th>用户名</th>                 
                        <th>最后登录时间</th>
                        <th>权限</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($res as $k=>$v)
                    <tr>                              
                        <td>{{$v->id}}</td>
                        <td>{{$v->phone}}</td>                        
                        <td>{{date('Y-m-d H:i:s',$v->lastlogin)}}</td>
                        <td>
                             <button class='btn btn-error'>{{$v->auth ? '开启': '关闭'}}</button>
                        </td>
                        <td>
                            <button class='btn btn-info'>{{$v->status ? '开启': '关闭'}}</button>
                        </td>
                        <td>
                            <form action="/admin/guanliyuan/{{$v->id}}" method="post">  
                                
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            <button class="btn btn-danger">删除</button>
                            
                            </form>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection