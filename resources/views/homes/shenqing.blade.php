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
        <label for="phone" class="col-sm-2 control-label">
            密码
        </label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码" name="password" required>
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">
            省份
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入省份" name="city" required>
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">
            市/区
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入市/区" name="area" required>
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">
            详细地址
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入详细地址" name="address" required>
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
                
            <button type="submit" id="func4" class="btn btn-danger" onclick="func4()">申请</button>
        </div>
    </div>
    </fieldset>
</form>

@endsection

@section('js')

<script type="text/javascript">
    //表单验证
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


    //弹框
    function func4() {
        //提示层
        layer.msg('申请成功');
    }
    

</script>
@endsection
