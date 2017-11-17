@extends('FilmAdmins.layout.index')

@section('title', '电影院修改影厅')


@section('content')
        
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>修改影厅</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/FilmAdmins/room/update/{{ $res->id }}" method="post">
              <div class="mws-form-inline">
                    <br>
                    <br>
                    <br>
                   <div class="mws-form-row">
                        <label class="mws-form-label">
                          影厅名称
                        </label>
                        <div class="mws-form-item">
                            <input type="text" name="roomname" value="{{ $res->roomname }}" class="small"><span></span>
                        </div>

                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="mws-form-row">
                        <label class="mws-form-label">
                        影厅类型
                        </label>
                        <div class="mws-form-item">
                            <input type="text" name="roomtype" value="{{ $res->roomtype }}" class="small"><span></span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                       
            </div>
            <div class="mws-button-row">
                {{ csrf_field() }}
                <input type="submit"  value="修改" class="btn btn-danger">
                
            </div>
        </form>
    </div>
</div>




@endsection
@section('js')      
<script>

//影厅名验证
$('input[name=roomname]').blur(function(){
    // alert(1111111);
    var roomname = $(this).val();

    var reg = /^\S*$/;

    var x = reg.exec(roomname);

    if(x){

        $(this).next().text('√');
        $(this).next().css('color','green');
    }else{
        $(this).next().text('您的影厅名字不正确');
        $(this).next().css('color','red');
    }

})
//影厅类型验证
$('input[name=roomtype]').blur(function(){
    // alert(1111111);
    var roomname = $(this).val();

    var reg = /^\S*$/;

    var x = reg.exec(roomname);

    if(x){

        $(this).next().text('√');
        $(this).next().css('color','green');
    }else{
        $(this).next().text('您的影厅名字不正确');
        $(this).next().css('color','red');
    }

})


</script>


@endsection