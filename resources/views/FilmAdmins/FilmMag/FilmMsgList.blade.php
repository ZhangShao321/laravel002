@extends('FilmAdmins.layout.index')

@section('title', '影片列表')


@section('content')
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i> 影片信息</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
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

                                 <!--遍历 -->
                     @foreach($film as $k => $v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->filmname}}</td>
                                    <td>{{$v->filmtime}}</td>
                                    <td>{{$v->keywords}}</td>
                                    <td>{{$v->director}}</td>
                                    <td>{{$v->protagonist}}</td>
                                    <td>{{$v->summary}}</td>
                                    <!-- date('Y-m-d', $v->showtime) -->
                                    <td>{{ $v->showtime }}</td>
                                    <td>{{$v->price}}</td>
                                    <td>{{$v->shownum}}</td>
                                    <td>
                                        <img src="{{asset($v->filepic)}}" style="width:120px;height:60px"  />
                                    </td>
                                  
                                  
                                    
                                    <td>{{$v->status }}</td>
                                   <td>
                                     <a href="{{asset('/FilmAdmins/edit?id=').$v->id}}">编辑</a> |
                                     <a href="#">删除</a>

                                   </td>
                                </tr>
                     @endforeach 
                          
                            </tbody>
                        </table>
                    </div>
                </div>
    






@endsection