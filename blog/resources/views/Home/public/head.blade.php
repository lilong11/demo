<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{$title or '商城' }}</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/home_public/img/favicon.ico">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- css  -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/bootstrap.min.css">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/material-design-iconic-font.min.css">
	<!-- Mean Menu CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/meanmenu.min.css">
	<!-- Owl Carousel CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/owl.carousel.css">
	<!-- Nivo Slider CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/nivo-slider.css">
	<!-- Price Slider CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/jquery-ui.min.css">
	<!-- Magnific Popup CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/magnific-popup.css">
	<!-- Animate CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/animate.min.css">
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/style.css">
	<!-- Default Color CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/color/color-one.css">
	<!-- Responsive CSS 
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/responsive.css">
	<!-- 商品详情图 
	============================================ -->
	<link rel="stylesheet" type="text/css" href="/home_public/css/normalize.css" />
	<link href="/home_public/src/jquery.exzoom.css" rel="stylesheet" type="text/css"/>
	<style>
	    #exzoom {
	        width: 500px;
	        /*height: 400px;*/
	       
	    }
	</style>
	<!-- Modernizer JS
	============================================ -->
	<script src="/home_public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
	<div class="loading-center">
		<div class="loading-center-absolute">
			<div class="object object_one"></div>
			<div class="object object_two"></div>
			<div class="object object_three"></div>
		</div>
	</div>
</div>
<div class="as-mainwrapper">
<!-- Header
============================================ -->
<div class="header">
	<!-- Header Top -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-4 header-top-left">
					<ul class="header-lan-cur float-left">
						<!-- Header Language -->
						<li><a href="/">首页</a></li>
						<li><a href="/hissues">问题</a></li>
						<li><a href="/hworks">文章</a></li>

						<li><a href="/home/opinion/create">意见</a></li>
						<li><a href="/home/mess/create">留言</a></li>
						<li><a href="/home/investor/create">我要加盟</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-xs-8 header-top-right">
					

					<!-- 登入显示开始 -->
					@if(empty(session('home')))
					<div class="header-account-login float-right">  
						<div class="header-login float-left text-center">
							<a href="#">登入 <i class="zmdi zmdi-chevron-down"></i></a>
							<div class="header-login-opt top-sub-menu sub-menu-right">
								<h5>登入 或 注册</h5>
								<a class="button small" href="users/login">登入</a>
								<span>or</span>
								<a class="button small transparent" href="/users/create">立即注册</a>
							</div>
						</div>
					</div>
					@else
					<div class="header-account-login float-right">
						<!-- 右边模块 -->
						<ul class="header-acc float-left">
							<li><a href="/home/report/create">举报</a>
							</li>
						</ul>

						<ul class="header-acc float-left">
							<li><a href="/fsignin">签到</a>
							</li>
						</ul>
						
						<ul class="header-acc float-left">

							<li><a href="/users">个人中心<i class="zmdi zmdi-chevron-down"></i></a>
								<ul class="top-sub-menu sub-menu-right">
									<li><a href="/users">个人中心</a></li> 
									<li><a href="/Collection">我的收藏</a></li>  
									<li><a href="/index/orders">我的订单</a></li>
									
								</ul>
							</li>
						</ul>
						<!-- 登入 --> 
						<ul class="header-acc float-left">
							<li><a href="/users"> <span style="color:red;">{{session('home')}}</span><i class="zmdi zmdi-chevron-down"></i></a>
								<ul class="top-sub-menu sub-menu-right">
									<li><a class="button small transparent" href="/usersexit">退出登入</a></li> <br>
									<li><a class="button small transparent" href="/register">立即注册</a></li>

								</ul>
							</li>
						</ul>
						<!-- =============================购物车图标开始================================ -->
						@if(empty($arr))
						<div class="mini-cart float-right">
							<a onclick="return confirm('您还没有购物~')" href="/"><i class="zmdi zmdi-shopping-basket"></i></a>
						</div>
					

						@else
					<div class="mini-cart float-right">
						<a href="/cart"><i class="zmdi zmdi-shopping-basket"></i><sub>{{ $num }}</sub></a>
						<!-- Mini Cart Wrapper -->
						<div class="mini-cart-wrapper top-sub-menu sub-menu-right">
							<!-- Product List -->
							@foreach($arr as $k=>$v)
							<div class="mc-pro-list fix">
							
								<div class="mc-sin-pro fix">
									<a href="#" class="mc-pro-image float-left"><img src="uploads/{{ $v->pic }}" alt=""></a>
									<div class="mc-pro-details fix">
										<a href="#">{{ $v->gname }}</a>
										<span>尺寸:{{ $size[$k]->gsizename }}</span>
										<span>数量: {{ $arr1[$k] }}</span>

										
									</div>
									<div class="mc-pro-details fix float-right">
										<span>{{ $v->price }} 元</span>
										
									</div>
								</div>
								
							</div>
						@endforeach
							<!-- Sub Total -->
							<div class="mc-subtotal fix">
								<h4>小计<span>{{ $total }} 元</span></h4>
								
							</div>
							<!-- Cart Button -->
							<div class="mc-button">
								<a href="/cart" class="button color-hover small">我的购物车</a>
							</div>
						</div>
					</div>
					@endif
<!-- =============================购物车图标结束================================ -->
					</div>
					@endif	
					<!-- 登入显示结束 -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- Header Bottom -->
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-bottom-wrap">
					<!-- Logo -->
					<div class="header-logo col-lg-3 col-md-2">
						<div class="logo"><a href="index.html"><img src="/home_public/public/logo.png" alt="无" style="width:60px" /></a></div>
					</div>
					<!-- Main Menu -->
					<div class="main-menu-wrap col-lg-6 col-md-7 hidden-sm hidden-xs">
						<div class="main-menu text-center">
							<nav>
								<ul>
									
									<li><a href="#"><i class="zmdi zmdi-chevron-down"></i></a>
										<!-- Mega Menu -->
										<div class="mega-menu mega-menu-link mm-right">

											<div class="mm-column mm-column-link float-left">
												<h4>商品</h4>
												
												<a href="/homegoods?id="></a>
												
											</div>
										</div>
									</li> 
									
								</ul>
							</nav>
						</div>
					</div>
					<!-- Mobile Menu -->
					<div class="mobile-menu text-center hidden-lg hidden-md">
						<nav>
							<ul>
								<li><a href="index.html">home</a></li>
								<li><a href="shop.html">shop</a>
									<ul>
										<li><a href="#">men</a>
											<ul>
												<li><a href="#">Blazers</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Collections</a></li>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">jens pant’s</a></li>
												<li><a href="#">sports shoes</a></li>
											</ul>
										</li>
										<li><a href="#">women</a>
											<ul>
												<li><a href="#">Cocktail</a></li>
												<li><a href="#">Sunglass</a></li>
												<li><a href="#">Evening</a></li>
												<li><a href="#">Footwear</a></li>
												<li><a href="#">Bootees Bags</a></li>
												<li><a href="#">Furniture</a></li>
											</ul>
										</li>
										<li><a href="#">accessories</a>
											<ul>
												<li><a href="#">gagets</a></li>
												<li><a href="#">laptop</a></li>
												<li><a href="#">mobile</a></li>
												<li><a href="#">lifestyle</a></li>
												<li><a href="#">jens pant’s</a></li>
												<li><a href="#">sports items</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="shop.html">men</a>
									<ul>
										<li><a href="#">women</a>
											<ul>
												<li><a href="#">Cocktail</a></li>
												<li><a href="#">Sunglass</a></li>
												<li><a href="#">Evening</a></li>
												<li><a href="#">Footwear</a></li>
												<li><a href="#">Bootees Bags</a></li>
												<li><a href="#">Furniture</a></li>
											</ul>
										</li>
										<li><a href="#">accessories</a>
											<ul>
												<li><a href="#">gagets</a></li>
												<li><a href="#">laptop</a></li>
												<li><a href="#">mobile</a></li>
												<li><a href="#">lifestyle</a></li>
												<li><a href="#">jens pant’s</a></li>
												<li><a href="#">sports items</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">pages</a>
									<!-- Sub Menu -->
									<ul>
										<li><a href="about-us.html">about us</a></li>
										<li><a href="blog.html">blog</a></li>
										<li><a href="blog-details.html">blog details</a></li>
										<li><a href="contact.html">contact</a></li>
										<li><a href="cart.html">cart</a></li>
										<li><a href="checkout.html">check out</a></li>
										<li><a href="product-details.html">product details</a></li>
										<li><a href="shop.html">shop grid</a></li>
										<li><a href="wishlist.html">wishlist</a></li>
										<li><a href="coming-soon.html">coming soon</a></li>
										<li><a href="404.html">404</a></li>
									</ul>
								</li>
								<li><a href="contact.html">contact</a></li>
							</ul>
						</nav>
					</div>
					<!-- Header Search -->
					<div class="header-search col-lg-3 col-md-3">
						<form action="/homegoods" method="get">
							<input type="text" name="search" placeholder="搜索" />
							<button type="submit"><i class="zmdi zmdi-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>