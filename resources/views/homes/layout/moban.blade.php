<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="/homes/img/favicon.ico">
<!-- google fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet'
	type='text/css'>
<!-- all css here -->
<!-- bootstrap v3.3.6 css -->
<link rel="stylesheet" href="/homes/css/bootstrap.min.css">
<!-- animate css -->
<link rel="stylesheet" href="/homes/css/animate.css">
<!-- jquery-ui.min css -->
<link rel="stylesheet" href="/homes/css/jquery-ui.min.css">
<!-- meanmenu css -->
<link rel="stylesheet" href="/homes/css/meanmenu.min.css">
<!-- RS slider css -->
<link rel="stylesheet" type="text/css" href="/homes/lib/rs-plugin/css/settings.css" media="screen" />
<!-- owl.carousel css -->
<link rel="stylesheet" href="/homes/css/owl.carousel.css">
<!-- font-awesome css -->
<link rel="stylesheet" href="/homes/css/font-awesome.min.css">
<!-- style css -->
<link rel="stylesheet" href="/homes/css/style.css">
<!-- responsive css -->
<link rel="stylesheet" href="/homes/css/responsive.css">
<!-- modernizr css -->
<script src="/homes/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
<!-- Add your site or application content here -->
<!-- header-top-area start -->
<div class="header-top-area hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-4">
				<div class="welcome">
					<span class="phone">Phone: +13838384380</span> <span class="hidden-sm">/</span>
					<span class="email hidden-sm">Email: shajiahuo@dianying.com</span>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-8">
				<div class="top-menu">
					
					<ul>
						<h2 style="color:white">欢迎来到傻家伙电影院</h2>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- header-top-area end -->
<div class="sticky-wrapper">
	<header>			
		<!-- header-bottom-area start -->            
		<div class="header-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="logo">
							<a href="index.html"><img src="/homes/img/logo/logo.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-5 col-sm-5 col-xs-6 hidden-xs">
						<div class="header-search">
							<input type="text" placeholder="请输入影片名..." />
							<button><i class="fa fa-search"></i></button>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 float-right account-wrap">
						<!-- Header shopping cart -->
						
						<!-- Header shopping cart -->
						<a href=""><img src="/homes/img/default.jpg" style="width:57px;height:57px;float:right"></a>
						<div class="my-account-holder float-right">  
						<p class="user_info_tip" style="color:purple">
					        Hi,欢迎来到傻家伙!
					    </p>
					    <p>
					        <a class="user_info_login" href="javascript:login();" style="color:purple">
					            登录
					        </a>
					        <a class="user_info_reg" href="javascript:regist();" style="color:purple">
					            注册
					        </a>
					    </p>
					</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- header-bottom-area end -->
		<!-- main-menu-area start -->
		<div class="main-menu-area hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="main-menu">
							<nav>
								<ul>
									<li><a href="/homes/index">首页</a></li>
									<li><a href="/homes/filmlist">电影</a></li>
									<li><a href="/homes/cinemalist">电影院</a></li>
									<li style="float:right"><h2 >静于形，动于心，震撼尽在傻家伙电影院！</h2></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>            
		<!-- main-menu-area end -->
		<!-- mobile-menu-area start -->
		<div class="mobile-menu-area visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li><a href="index.html">电影</a></li>
									<li><a href="about.html">电影院</a></li>
									<li><a href="shop-list.html">Shop List</a></li>
								</ul>
							</nav>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- mobile-menu-area end -->			
	</header>
</div>
<!-- HOME SLIDER -->
@section('content')
            
@show
<!-- footer start -->
<footer>
		<!-- footer-top-area start -->
		<div class="footer-top-area">
			<div class="container">
				<div class="row">
					<!-- footer-widget start -->
					<div class="col-lg-3 col-md-3 col-sm-4">
						<div class="footer-widget">
							<img src="/homes/img/logo/logo.jpg" alt="" />
							<p><h4 style="color:white">傻家伙影视是一家成立了好多好多年的超清好多好多好多D的集好多好多种娱乐项目为一体的超超超超超超大型电影院</h4></p>
							
						</div>
					</div>
					<!-- footer-widget end -->
					<!-- footer-widget start -->
					<div class="col-lg-3 col-md-3 hidden-sm">
						<div class="footer-widget">
							<h3>如何在线选座购票</h3>
							<ul class="footer-menu">
								<li><a href="#">选场次&选座位</a></li>
								<li><a href="#">在线支付</a></li>
								<li><a href="#">获取取票码</a></li>
								<li><a href="#">影院现场自助取票</a></li>
								<li><a href="#">送票热线:10086111</a></li>
							</ul>
						</div>
					</div>
					<!-- footer-widget end -->
					<!-- footer-widget start -->
					<div class="col-lg-3 col-md-3 col-sm-4">
						<div class="footer-widget">
							<h3>友情链接</h3>
							<ul class="footer-menu">
								<li><a href="#">中国石油</a></li>
								<li><a href="#">中国航空</a></li>
								<li><a href="#">中国石化</a></li>
								<li><a href="#">中国移动</a></li>
								<li><a href="#">中国铁建</a></li>
							</ul>
						</div>
					</div>
					<!-- footer-widget end -->
					<!-- footer-widget start -->
					<div class="col-lg-3 col-md-3 col-sm-4">
						<div class="footer-widget">
							<h3>关于我们</h3>
							<ul class="footer-contact">
								<li>
									<i class="fa fa-map-marker"> </i>
									地址:北京市昌平区回龙观文化西路,育荣教育园区
								</li>
								<li>
									<i class="fa fa-envelope"> </i>	
									邮箱: shajiahuo@dianying.com
								</li>
								<li>
									<i class="fa fa-phone"> </i>
									电话: +13838384380  
								</li>
							</ul>
						</div>
					</div>
					<!-- footer-widget end -->
				</div>
			</div>
		</div>
		<!-- footer-top-area end -->
		<!-- footer-bottom-area start -->
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-md-offset-2">
						<div class="copyright">
							<p>北京傻家伙网络科技有限公司Copyright 1937-2017 Mtime.com  Inc. All rights reserved..
京ICP证888888号网络视听许可证888888888888号网络文化经营许可证广播电视节目制作经营许可证(京)字第1435号京公网安备：66666666666666号</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-bottom-area end -->
	</footer>
<!-- footer end -->
<!-- all js here -->
<!-- jquery latest version -->
<script src="/homes/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="/homes/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="/homes/js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="/homes/js/jquery-ui.min.js"></script>
<!-- RS-Plugin JS -->
<script type="text/javascript" src="/homes/lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/homes/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/homes/lib/rs-plugin/rs.home.js"></script>
<!-- meanmenu js -->
<script src="/homes/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="/homes/js/wow.min.js"></script>
<!-- plugins js -->
<script src="/homes/js/plugins.js"></script>
<!-- main js -->
<script src="/homes/js/main.js"></script>
</body>
<!-- Mirrored from themepure.net/tf/tp-shop-preview/tp-shop/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 13 Apr 2016 11:24:56 GMT -->
</html>