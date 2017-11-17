@extends('admin.layout.admins')
        
@section('title','用户列表')


@section('content')

	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 用户列表详情</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
                       
                        <form action="/admin/user" method="get">
                        <div class="dataTables_length">
                            <label>
                               显示
                                <select name="num" size="1" aria-controls="DataTables_Table_1">
                                    <option value="10" @if(isset($_GET['num']) ? $_GET['num'] : '10') selected="selected"  @endif>
                                        10
                                    </option>
                                     <option value="25" @if($request->num == '25')  selected="selected"  @endif>
                                        25
                                    </option>
                              
                                </select>
 >                               条数据
                            </label>
                        </div>
                        <div class="dataTables_filter" id="DataTables_Table_1_filter">
                            <label>
                                关键字:
                                <input type="text" name="search" aria-controls="DataTables_Table_1" value="">
                            </label>
                            <button class="btn btn-danger">搜索</button>
                        </div>
                           
                        </form>


                        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
                        aria-describedby="DataTables_Table_1_info">

                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 130px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    ID
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 212px;" aria-label="Browser: activate to sort column ascending">
                                    用户名
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 197px;" aria-label="Platform(s): activate to sort column ascending">
                                    邮箱
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">
                                    手机
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 97px;" aria-label="CSS grade: activate to sort column ascending">
                                    头像
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 97px;" aria-label="CSS grade: activate to sort column ascending">
                                   状态
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 133px;" aria-label="CSS grade: activate to sort column ascending">
                                   操作
                                </th>
                            </tr>
                        </thead>
                                                    
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach($res as $k=>$v)
                                    <tr class="@if($k % 2== 1)odd @else even @endif">           
                                    <td class="">{{$v->id}}</td>
                                    <td class=" ">{{$v->username}}</td>
                                    <td class=" ">{{$v->email}}</td>
                                    <td class=" ">{{$v->phone}}</td>
                                    <td class=" ">
                                        <img src="{{$v->profile}}" style="width:100px;height:100px;">
                                    </td>
                                    <td class=" ">
                                            <button class='btn btn-info'>{{$v->status? '开启': '关闭'}}</button>
                                    </td>
                                    <td class=" ">

                                        <a href="/admin/user/{{$v->id}}/edit"><button class="btn btn-success">修改</button></a>

                                        <form action="/admin/user/{{$v->id}}" method="post">
                                            {{csrf_field() }}
                                            {{method_field('DELETE') }}

                                            <button class="btn btn-warning">删除</button>
                                        </form>
            
                                          
                                    </td>
                                    </tr>
                                @endforeach  
                        </tbody>
                        </table>
                        <div class="dataTables_info" id="DataTables_Table_1_info">
                            Showing 1 to 10 of 57 entries
                        </div>
                            <style type="text/css">
                          

                            .pagination li{
                                background-color: #444444;
                                border-left: 1px solid rgba(255, 255, 255, 0.15);
                                border-right: 1px solid rgba(0, 0, 0, 0.5);
                                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(255, 255, 255, 0.15) inset;
                                color: #fff;
                                cursor: pointer;
                                display: block;
                                float: left;
                                font-size: 12px;
                                height: 20px;
                                line-height: 20px;
                                outline: medium none;
                                padding: 0 10px;
                                text-align: center;
                                text-decoration: none;
                            }
                            .pagination .active{

                                background-color: #c5d52b;
                                border: medium none;
                                box-shadow: 0 0 4px rgba(0, 0, 0, 0.25) inset;
                                color: #323232;
                            }

                            .pagination a{
                                color: #fff;
                            }

                            .pagination{

                                margin:0px;
                            }
                            </style>
                        <div class="dataTables_paginate paging_full_numbers">

                        <!-- {!! $res->render() !!} -->
                       {!! $res->appends($_GET)->render() !!}
                        </div>
                        </div>
                    </div>
                </div>

@endsection