@extends('admin.layout.admins')

@section('title','后台首页')

@section('content')
    <h1>现在是北京时间:</h1>
    <div id='dvs' style='width:600px;height:40px;line-height:40px;text-align:center;font-size:40px;color:purple;float:left;font-family:"Microsoft Yahei";margin-top:30px'></div>
@endsection

@section('js')
   <script type="text/javascript">

    var dvs = document.getElementById('dvs');

    //定时器
    setInterval(function(){
    //初始化
    var d = new Date();

    //获取年
    var y = d.getFullYear();

    //获取月
    var m = d.getMonth()+1;
    if(m < 10){

        m = '0'+m;
    }

    //获取天
    var t = d.getDate();
    if(t < 10){

        t = '0'+t;
    }


    //小时
    var h = d.getHours();
    if(h < 10){

        h = '0'+h;
    }

    //f分钟
    var i = d.getMinutes();
    if(i < 10){

        i = '0'+i;
    }

    //秒
    var s = d.getSeconds();
    if(s < 10){

        s = '0'+s;
    }

    //星期
    var w = d.getDay();

    switch(w){
        case 0:
            w = '星期日';
        break;
        case 1:
            w = '星期一';
        break;
        case 2:
            w = '星期二';
        break;
        case 3:
            w = '星期三';
        break;
        case 4:
            w = '星期四';
        break;
        case 5:
            w = '星期五';
        break;
        case 6:
            w = '星期六';
        break;

    }

    dvs.innerHTML = y+'-'+m+'-'+t+' '+h+':'+i+':'+s+' '+w;

    },1000)



    </script>


@endsection