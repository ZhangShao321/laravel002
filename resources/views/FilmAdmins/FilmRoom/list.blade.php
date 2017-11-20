@extends('FilmAdmins.layout.index')

@section('title', '电影院影厅列表')


@section('content')
        

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> 电影院影厅列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>影厅名称</th>
                    <th>影厅类型</th>
                    <th>添加时间</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>

            @foreach($res as $k=>$v)
                <tr align="center">
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->roomname }}</td>
                    <td>{{ $v->roomtype }}</td>
                    <td>{{ date('Y-m-d H:i:s', $v->rtime) }}</td>
                    <td>
                        @if($v->status==1)
                        <button id="{{ $v->id }}" name="{{ $v->status }}" class="b1">正在使用中...</button> 
                        @else
                        <button id="{{ $v->id }}" name="{{ $v->status }}" class="b1">正在检修中...</button>
                        @endif
                    </td>
                    <td>
                        <a href="/FilmAdmins/room/edit/{{ $v->id }}"><button>修改</button></a>
                        <a href="/FilmAdmins/room/delete/{{ $v->id }}"><button>删除</button></a>
                        <a href="/FilmAdmins/room/seat/{{ $v->id }}"><button>座位</button></a>
                    </td>
                </tr>
            @endforeach   
            </tbody>
        </table>
    </div>
</div>



@endsection
@section('js')      
<script>
$('.b1').click(function(){

    var ids = $(this).attr('id');
    var status = $(this).attr('name');
    var bbb = $(this);

    $.post('{{ url("/FilmAdmins/room/work") }}',{_token:'{{ csrf_token() }}', id:ids, status:status}, function(data){
        
        console.log(data);

        if(data == 1){
            bbb.text('正在检修中...');
            bbb.attr('name',0);
        } else if(data == 2){
            bbb.text('正在使用中...');
            bbb.attr('name',1);
        } 
    });

})


</script>


@endsection