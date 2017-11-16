<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{asset('/FilmAdmin/bootstrap/css/bootstrap.min.css')}}" media="screen">
<link rel="stylesheet" type="text/css" href="{{asset('/FilmAdmin/css/fonts/ptsans/stylesheet.css')}}" media="screen">
<link rel="stylesheet" type="text/css" href="{{asset('/FilmAdmin/css/fonts/icomoon/style.css')}}" media="screen">

<link rel="stylesheet" type="text/css" href="{{asset('/FilmAdmin/css/login.css')}}" media="screen">

<link rel="stylesheet" type="text/css" href="{{asset('/FilmAdmin/css/mws-theme.css')}}" media="screen">

<title>电影院登录页面</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>Film Login</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>

            


            <div id="mws-login-form">


             @if(session('msg'))
            <div class="mws-form-message info" id="msg">

           
                    {{session('msg')}}   
                     </div>         
          
            @endif
             
                <form class="/admin/dologin" action="{{asset('/admin/dologin')}}" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="uname" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="type" name="code" placeholder="请输入验证码" class="mws-login " style="width:120px;height:30px;margin-right:10px" >

                            <img src="{{asset('/FilmAdmins/FilmCode')}}" class="img-rounded" onclick="this.src = this.src += '?1'" >
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        {{ csrf_field() }}
                        <input type="submit" value="Login" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="{{asset('/FilmAdmin/js/libs/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('/FilmAdmin/js/libs/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('/FilmAdmin/custom-plugins/fileinput.js')}}"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="{{asset('/FilmAdmin/jui/js/jquery-ui-effects.min.js')}}"></script>

    <!-- Plugin Scripts -->
    <script src="{{asset('/FilmAdmin/plugins/validate/jquery.validate-min.js')}}"></script>

    <!-- Login Script -->
    <script src="{{asset('/FilmAdmin/js/core/login.js')}}"></script>
    <script type="text/javascript">

            $('.mws-form-message').delay('3000').slideUp('2000');




    </script>

</body>
</html>
