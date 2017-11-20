@extends('homes.layout.moban')

@section('title','电影院列表页')

@section('content')
<!-- heading-banner start -->

<!-- HOME SLIDER -->
<!-- heading-banner start -->
<div class="heading-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{url('/homes/index')}}">首页</a></li>
                    <li class="active">电影院列表</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- heading-banner end -->
<!-- about-us-area start -->
<div class="about-us-area">
    <div class="container">
        <div class="row">
            <!-- about-img start -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-img">
                    <img src="img/about/1.jpg" alt="" />
                </div>
            </div>
            <!-- about-img end -->
            <!-- about-text start -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-text">
                    <h2>
                        We are <span>Maahi Shop</span></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae
                        convallis varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet
                        egestas mauris in venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus
                        aliquet egestas mauris in venenatis.</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae
                        convallis varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet
                        egestas mauris in venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus
                        aliquet egestas mauris in venenatis.</p>
                    <p>
                        Donec aliquet, nibh ut imperdiet venenatis, arcu lectus bibendum velit, et gravida
                        sapien justo a libero. Suspendisse ornare, urna id finibus vestibulum.</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae
                        convallis varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet
                        egestas mauris in venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus
                        aliquet egestas mauris in venenatis.
                    </p>
                </div>
            </div>
            <!-- about-text end -->
        </div>
    </div>
</div>
<!-- about-us-area end -->
<!-- about-counter-area start -->
<div class="about-counter-area">
    <div class="container">
        <div class="row">
            <!-- single-counter start -->
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter">
                    <i class="fa fa-users"></i>
                    <h3 class="about-counter">
                        150000</h3>
                    <h4 style="color:white">观影人数</h4>
                </div>
            </div>
            <!-- single-counter end -->
            <!-- single-counter start -->
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter">
                    <i class="fa fa-trophy"></i>
                    <h3 class="about-counter">
                        1</h3>
                    <h4 style="color:white">影院排行</h4>
                </div>
            </div>
            <!-- single-counter end -->
            <!-- single-counter start -->
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter">
                    <i class="fa fa-thumbs-up"></i>
                    <h3 class="about-counter">
                        43960</h3>
                    <h4 style="color:white">好评</h4>
                </div>
            </div>
            <!-- single-counter end -->
            <!-- single-counter start -->
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter">
                    <i class="fa fa-home"></i>
                    <h3 class="about-counter">
                        5430</h3>
                    <h4 style="color:white">影院数量</h4>
                </div>
            </div>
            <!-- single-counter end -->
        </div>
    </div>
</div>
<!-- about-counter-area end -->
<!-- about-team-area start -->
<div class="about-team-area">
    <div class="container">
        <div class="row">
            <!-- single-about-team start -->
            <div class="col-md-3 col-sm-4">
                <div class="single-about-team">
                    <div class="about-team-img">
                        <a href="{{url('/homes/cinemadetail')}}"><img src="img/about/team.jpg" alt="" /></a>
                    </div>
                    <div class="about-team-info">
                        <h3>
                            电影院名称</h3>
                        <p>地址：</p>
                        
                    </div>
                </div>
            </div>
            <!-- single-about-team end -->
           
        </div>
    </div>
</div>
<!-- about-team-area end -->



<!-- shop-area end -->
@endsection
