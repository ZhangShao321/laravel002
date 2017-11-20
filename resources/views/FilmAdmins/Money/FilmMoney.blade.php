@extends('FilmAdmins.layout.index')

@section('title', '钱包信息')


@section('content')
			<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>钱包信息</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>电影院名称</th>
                                    <th>法人</th>
                                    <th>电话</th>
                                    <th>钱包</th>
                                    <th>今日收益</th>
                                                                    </tr>
                            </thead>
                            <tbody>
                            
                         @foreach($res as $k => $v)
                                <tr>
                                    <td>{{$v->cinema}}</td>
                                    <td>{{$v->legal}}</td>
                                    <td>{{$v->phone}}</td>
                                    <td>{{$v->money}}</td>
                                    <td>收益</td>
                                   
                                   
                                </tr>
                        @endforeach
                          
                            </tbody>
                        </table>
                    </div>
                </div>
	






@endsection