@extends('homes.layout.moban')

@section('title','电影院详情页')

@section('content')

<!-- HOME SLIDER -->
<!-- heading-banner start -->
<div class="heading-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="{{url('/homes/index')}}">首页</a></li>
					<li><a href="{{url('/homes/cinemalist')}}">电影院列表</a></li>
					<li class="active">电影院详情</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- heading-banner end -->
<!-- single-product-area start -->
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-pro-tab-content">
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">
									<a href="#">
										<img src="img/product/1.jpg" alt="" /></a></div>
								<div role="tabpanel" class="tab-pane" id="profile">
									<a href="#">
										<img src="img/product/2.jpg" alt="" /></a></div>
								<div role="tabpanel" class="tab-pane" id="messages">
									<a href="#">
										<img src="img/product/3.jpg" alt="" /></a></div>
								<div role="tabpanel" class="tab-pane" id="settings">
									<a href="#">
										<img src="img/product/4.jpg" alt="" /></a></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 shop-list">
						<div class="product-info product-single">
							<h3>
								<a href="single-product.html">电影院名字</a></h3>
							<div class="pro-rating">
								<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
									class="fa fa-star"></i><i class="fa fa-star"></i>
								
							</div>
							
							<hr class="page-divider">
							<div class="product-desc">
								<p>地址：</p>
								
								<ul>
									<li>- Cras tristique neque a mauris volutpat, eget sodales neque elementum.</li>
									<li>- Vestibulum iaculis velit sed dolor suscipit pretium.</li>
									<li>- Etiam mattis risus id leo imperdiet tincidunt.</li>
								</ul>
							</div>
							<hr class="page-divider">
							
							
							
							
							
						</div>
					</div>
				</div>

		<!-- features-area start -->
		<div class="features-area pad-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<h3>
								上映电影</h3>
						</div>
					</div>
				</div>
				<div class="row">
			    <div class="col-lg-12">
			        <div class="product-tab">
			            <!-- Nav tabs -->
			            <!-- Tab panes -->
			            <div class="tab-content">
			                <div role="tabpanel" class="tab-pane active" id="home">
			                    <div class="row">
			                        <div class="product-curosel">
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/1.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/2.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/12.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/13.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/5.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/6.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/14.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/15.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/9.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/10.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                        </div>
			                    </div>
			                </div>
			                <div role="tabpanel" class="tab-pane" id="men">
			                    <div class="row">
			                        <div class="product-curosel">
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/11.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/12.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/13.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/14.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/15.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/16.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/1.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/2.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/6.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/7.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                        </div>
			                    </div>
			                </div>
			                <div role="tabpanel" class="tab-pane" id="women">
			                    <div class="row">
			                        <div class="product-curosel">
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/8.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/2.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/12.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/13.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/9.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/16.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/15.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/3.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/5.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/10.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                        </div>
			                    </div>
			                </div>
			                <div role="tabpanel" class="tab-pane" id="kids">
			                    <div class="row">
			                        <div class="product-curosel">
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/11.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/4.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/3.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/9.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/7.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/6.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/11.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/12.jpg" alt="" />
			                                        </a>
			                                        <span class="sale">
			                                            sale
			                                        </span>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                $180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                            <!-- single-product start -->
			                            <div class="col-lg-12">
			                                <div class="single-product">
			                                    <div class="product-img">
			                                        <a href="single-product.html">
			                                            <img class="primary-img" src="/homes/img/product/1.jpg" alt="" />
			                                            <img class="secondary-img" src="/homes/img/product/7.jpg" alt="" />
			                                        </a>
			                                        <div class="product-action">
			                                            <div class="pro-button-top">
			                                                <a href="#">
			                                                    add to cart
			                                                </a>
			                                            </div>
			                                            <div class="pro-button-bottom">
			                                                <a href="#">
			                                                    <i class="fa fa-heart">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-retweet">
			                                                    </i>
			                                                </a>
			                                                <a href="#">
			                                                    <i class="fa fa-search-plus">
			                                                    </i>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="product-info">
			                                        <h3>
			                                            <a href="single-product.html">
			                                                Dolor Sir Amet Percpectum
			                                            </a>
			                                        </h3>
			                                        <div class="pro-price">
			                                            <span class="normal">
			                                                $150
			                                            </span>
			                                            <span class="old">
			                                                #180
			                                            </span>
			                                        </div>
			                                        <div class="pro-rating">
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                            <i class="fa fa-star">
			                                            </i>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <!-- single-product end -->
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
				</div>
			</div>
		</div>
		<!-- features-area end -->
				
			</div>
		</div>
	</div>
</div>
<!-- single-product-area end -->
<!-- brand-area start -->

<!-- brand-area end -->
@endsection

