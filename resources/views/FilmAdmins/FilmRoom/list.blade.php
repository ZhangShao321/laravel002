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
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->roomname }}</td>
                    <td>{{ $v->roomtype }}</td>
                    <td>{{ $v->rtime }}</td>
                    <td>{{ $v->status }}</td>
                    <td>
                        <a href="/FilmAdmins/room/edit/{{ $v->id }}"><button>修改</button></a>
                        <a href="/FilmAdmins/room/delete/{{ $v->id }}"><button>删除</button></a>
                        <a href=""><button>座位</button></a>
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



</script>


@endsection