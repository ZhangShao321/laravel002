@extends('FilmAdmins.layout.index')

@section('title', '影厅列表')


@section('content')
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i> 影厅列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>时长</th>
                                    <th>关键字</th>
                                    <th>导演</th>
                                    <th>主演</th>
                                    <th>简介</th>
                                    <th>上映时间</th>
                                    <th>票价</th>
                                    <th>售票数量</th>
                                    <th>图片</th>
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
                                    <td>4</td>
                                    <td>X</td>
                                    <td>X</td>
                                    <td>X</td>
                                    <td>X</td>
                                    <td>X</td>
                                   <td> <a href="#">编辑</a></td>
                                </tr>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
    






@endsection