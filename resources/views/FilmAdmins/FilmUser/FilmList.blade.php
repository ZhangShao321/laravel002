@extends('FilmAdmins.layout.index')

@section('title', '电影院列表')


@section('content')
			<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 影院信息</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>法人</th>
                                    <th>电话</th>
                                    <th>省份</th>
                                    <th>区域</th>
                                    <th>营业执照</th>
                                    <th>logo</th>
                                    <th>地址</th>
                                    <th>详细地址</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Int 4.0</td>
                                    <td>Win 95+</td>
                                    <td>Win 95+</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                    <td>X</td>
                                    <td>X</td>
                                   <td> <a href="{{asset('/FilmAdmins/info')}}">编辑</a></td>
                                </tr>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
	






@endsection