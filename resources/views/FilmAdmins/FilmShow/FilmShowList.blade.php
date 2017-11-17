@extends('FilmAdmins.layout.index')

@section('title', '放映列表')


@section('content')
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i> 放映列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>电影名称</th>
                                    <th>时长</th>
                                    <th>影厅</th>
                                    <th>影院</th>
                                    <th>开始时间</th>
                                    <th>结束时间</th>
                                    <th>状态</th>
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
                                    <td>Win 95+</td>
                                    <td>Win 95+</td>
                                    
                                   <td> <a href="#">编辑</a></td>
                                </tr>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
    






@endsection