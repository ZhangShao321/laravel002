@extends('FilmAdmins.layout.index')

@section('title', '电影院后台首页')


@section('content')
        
        <div style="font-size:20px;">
        
             <p style="float:left">现在时间&nbsp; : &nbsp;</p>
           
            <div id="dvs" >



            </div>

        
        </div>

    





@endsection



@section('js')
        
        <script type="text/javascript">




                setInterval(function(){

                    var datetime = new Date();

                //获取年
                var years = datetime.getFullYear();
                console.log(years);
                //获取月  当前月要加1
                var month = datetime.getMonth();
                console.log(month);

                if(month<10)
                {
                    month = '0'+month;

                }
                //获取天

                var days = datetime.getDate();
                if(days<10)
                {
                    days = '0'+days;

                }
                //获取时

                var hours = datetime.getHours();
                // console.log(hours);
                 if(hours<10)
                {
                    hours = '0'+hours;

                }


                //获取分

                var mins = datetime.getMinutes();
                 if(mins < 10)
                {
                    mins = '0'+mins ;

                }

                //获取秒Date.getSeconds( )
                var second = datetime.getSeconds();
                 if(second < 10)
                {
                    second = '0'+second ;

                }

              str = years + "年" + (month+1) +"月" + days+ "日"+" " +hours+':'+mins+":"+second;
               $('#dvs').html(str); 

                



                },1000);
              
        </script>


@endsection