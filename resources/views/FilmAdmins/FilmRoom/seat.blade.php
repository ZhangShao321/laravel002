@extends('FilmAdmins.layout.index')

@section('title', '电影院添加影厅')


@section('content')
        
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>添加座位图</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/FilmAdmins/Filmroom/insert" method="post">
            <div class="mws-form-block">

            <div class="mws-form-row">
                <label class="mws-form-label">座位图</label>
                <div class="mws-form-item">
                    行: <input type="text"  name="hang">
                    列: <input type="text"  name="lie">
                    <button id="buts" class="btn btn-danger">确认</button>
                </div>
            </div>
                 
            <div class="mws-form-row">
                <label class="mws-form-label">座位图</label>
                <div class="mws-form-item"> 
                
                </div>
            </div> 
                
            </div>
            <div class="mws-button-row">
                {{ csrf_field() }}
                <input type="submit" style="float:right;margin-right:450px" value="完成" class="btn btn-danger">
                
            </div>
        </form>
    </div>
</div>




@endsection
@section('js')      
<script>



</script>


@endsection