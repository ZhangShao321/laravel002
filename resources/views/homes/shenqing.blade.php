@extends('homes.layout.moban')

@section('title','商户申请页')

@section('content')

<!-- HOME SLIDER -->
<div class="heading-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{url('/homes/index')}}">首页</a></li>
                    
                    <li class="active">商户申请</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- heading-banner start -->
<form class="form-horizontal" action="{{url('/homes/store')}}" method="post" id="box" enctype="multipart/form-data">
    <fieldset>
    <div class="form-group">
        <label for="cinema" class="col-sm-2 control-label">
            电影院名称
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入影院名字" name="cinema" id="cinema" minlength="4"  required>
        </div>
    </div>
    <div class="form-group">
        <label for="license" class="col-sm-2 control-label">
            电影院法人
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入法人名字" name="legal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">
            联系电话
        </label>
        <div class="col-sm-5">
            <input type="phone" class="form-control" id="inputPassword3" placeholder="请输入手机号" name="phone" required>
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">
            电影院地址
        </label>
        <div class="col-sm-5">
            <textarea class="form-control" rows="3" name="aid" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">
            电影院执照
        </label>
        <div class="col-sm-5">
            <input type="file" id="exampleInputFile" name="license" required>
        </div>
    </div>
    
    <div class="form-group">
        <label for="status" class="col-sm-2 control-label">
            电影院状态
        </label>
        <label class="radio-inline">
          <input type="radio" name="status" id="inlineRadio1" value="1" name="status"> 开启
        </label>
        <label class="radio-inline">
          <input type="radio" name="status" id="inlineRadio2" value="0" name="status"> 关闭
        </label>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">
                申请
            </button>
        </div>
    </div>
    </fieldset>
</form>

@endsection

@section('js')

<script type="text/javascript">

    $.validator.setDefaults({
    submitHandler: function() {
      alert("提交事件!");
    }
    });
    $().ready(function() {
        $("#box").validate();
    });
    errorPlacement: function(error, element) {  
        error.appendTo(element.parent());  
    }

</script>
@endsection
