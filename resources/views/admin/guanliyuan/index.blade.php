@extends('admin.layout.admins')
        
@section('title','管理员列表')


@section('content')
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
<<<<<<< HEAD
                    	<span><i class="icon-table"></i>管理员列表</span>
=======
                    	<span><i class="icon-table"></i> Simple Table</span>
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
<<<<<<< HEAD
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
                                         <button class='btn btn-error'>{{$v->auth? '开启': '关闭'}}</button>
                                    </td>
                                    <td>
                                         <button class='btn btn-info'>{{$v->status? '开启': '关闭'}}</button>
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
=======
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                         Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                         Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                         Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                         Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr>
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
                            </tbody>
                        </table>
                    </div>
                </div>


@endsection