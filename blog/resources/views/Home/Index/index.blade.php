<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

	<title>{{$title or '商城' }}</title>
	<meta name="description" content="">


	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="./home_public/img/favicon.ico">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- css  -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/bootstrap.min.css">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/material-design-iconic-font.min.css">
	<!-- Mean Menu CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/meanmenu.min.css">
	<!-- Owl Carousel CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/owl.carousel.css">
	<!-- Nivo Slider CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/nivo-slider.css">
	<!-- Price Slider CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/jquery-ui.min.css">
	<!-- Magnific Popup CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/magnific-popup.css">
	<!-- Animate CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/animate.min.css">
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/style.css">
	<!-- Default Color CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/color/color-one.css">
	<!-- Responsive CSS 
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/responsive.css">
	<!-- Modernizer JS
	============================================ -->
	<script src="./home_public/js/vendor/modernizr-2.8.3.min.js"></script>

	    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
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
<div class="header transparent fixed">
	<!-- 头部 导航开始 -->
    <div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-4 header-top-left">
					<!-- Header Language Currency -->
					<ul class="header-lan-cur float-left">
						<!-- Header Language -->
						<li><a href="/">首页</a></li>
						<li><a href="">问题</a></li>
						<li><a href="/workss">文章</a></li>
						<li><a href="/home/investor/create">我要加盟</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-xs-8 header-top-right">
					<!-- Header Mini Cart -->
					<div class="mini-cart float-right">
						<a href="#"><i class="zmdi zmdi-shopping-basket"></i><sub>2</sub></a>
						<!-- Mini Cart Wrapper -->
						<div class="mini-cart-wrapper top-sub-menu sub-menu-right">
							<!-- Product List -->
							<div class="mc-pro-list fix">
								<div class="mc-sin-pro fix">
									<a href="#" class="mc-pro-image float-left"><img src="img/mini-cart/1.jpg" alt=""></a>
									<div class="mc-pro-details fix">
										<a href="#">Women’s winter dress</a>
										<span>1x$45.00</span>
										<button class="pro-del"><i class="zmdi zmdi-delete"></i></button>
									</div>
								</div>
								<div class="mc-sin-pro fix">
									<a href="#" class="mc-pro-image float-left"><img src="img/mini-cart/2.jpg" alt=""></a>
									<div class="mc-pro-details fix">
										<a href="#">Full sleev women shirt</a>
										<span>1x$85.00</span>
										<button class="pro-del"><i class="zmdi zmdi-delete"></i></button>
									</div>
								</div>
							</div>
							<!-- Sub Total -->
							<div class="mc-subtotal fix">
								<h4>Subtotal <span>$130.00</span></h4>
								
							</div>
							<!-- Cart Button -->
							<div class="mc-button">
								<a href="#" class="button color-hover small">checkout</a>
							</div>
						</div>
					</div>

					<!-- 登入显示开始 -->
					@if(empty(session('home')))
					<div class="header-account-login float-right">  
						<div class="header-login float-left text-center">
							<a href="#">登入 <i class="zmdi zmdi-chevron-down"></i></a>
							<div class="header-login-opt top-sub-menu sub-menu-right">
								<h5>登入 或 注册</h5>
								<a class="button small" href="users/login">登入</a>
								<span>or</span>
								<a class="button small transparent" href="/register">立即注册</a>
							</div>
						</div>
					</div>
					@else
					<div class="header-account-login float-right">
						<!-- 右边模块 -->
						<ul class="header-acc float-left">
							<li><a href="/fsignin">签到</a>
							</li>
						</ul>
						<ul class="header-acc float-left">
							<li><a href="/users">个人中心<i class="zmdi zmdi-chevron-down"></i></a>
								<ul class="top-sub-menu sub-menu-right">
									<li><a href="#">个人中心</a></li> 
									<li><a href="/Collection">我的收藏</a></li>  
								</ul>
							</li>
						</ul>
						<!-- 登入 --> 
						<ul class="header-acc float-left">
							<li><a href="/users"> <span style="color:red;">{{session('home')}}</span><i class="zmdi zmdi-chevron-down"></i></a>
								<ul class="top-sub-menu sub-menu-right">
									<li><a href="usersexit">退出登入</a></li> 
								</ul>
							</li>
						</ul>
					</div>
					@endif	
					<!-- 登入显示结束 -->

				</div>
			</div>
		</div>
	</div>
	<!-- 头部导航结束 -->
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-bottom-wrap">
					<!-- Logo -->
					<div class="header-logo col-lg-3 col-md-2">
						<div class="logo"><a href="index.html"><img src="./home_public/img/logo.png" alt="logo" /></a></div>
					</div>
					<!-- Main Menu -->
					<div class="main-menu-wrap col-lg-6 col-md-7 hidden-sm hidden-xs">
						<div class="main-menu text-center">
							<nav>
								<ul>
									@foreach($type_data as $k=>$v)
									<li><a href="shop.html">{{ $v->tname }}<i class="zmdi zmdi-chevron-down"></i></a>
										<!-- Mega Menu -->
										<div class="mega-menu mm-5-column mm-left">
											<div class="mm-column mm-column-link float-left">
												<h3>商品</h3>
												@foreach($v['sub'] as $kk=>$vv)
													<a href="#">{{	$vv->tname }}</a>
												@endforeach
											</div>
											
											<div class="mm-column mm-column-banner float-left">
												<a href="#"><img src="./home_public/img/menu-banner/1.jpg" alt="banner" /></a>
												<a href="#"><img src="./home_public/img/menu-banner/2.jpg" alt="banner" /></a>
											</div>
										</div>
									</li>
									@endforeach
									<li><a href="#">pages <i class="zmdi zmdi-chevron-down"></i></a>
										<!-- Mega Menu -->
										<div class="mega-menu mega-menu-link mm-right">

											<div class="mm-column mm-column-link float-left">
												<h4>shop pages</h4>
												<a href="shop.html">shop grid</a>
												<a href="product-details.html">product details</a>
												<a href="product-details-left-sidebar.html">product details left sidebar</a>
											</div>
											<div class="mm-column mm-column-link float-left">
												<h4>shop pages</h4>
												<a href="cart.html">cart</a>
												<a href="checkout.html">check out</a>
												<a href="wishlist.html">wishlist</a>
											</div>
											<div class="mm-column mm-column-link float-left">
												<h4>blog pages</h4>
												<a href="blog.html">blog</a>
												<a href="blog-details.html">blog details</a>
											</div>
											<div class="mm-column mm-column-link float-left">
												<h4>other pages</h4>
												<a href="about-us.html">about us</a>
												<a href="contact.html">contact</a>
												<a href="coming-soon.html">coming soon</a>
												<a href="404.html">404</a>
											</div>
										</div>
									</li>
									<li><a href="contact.html">商城</a></li>
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
						<form action="#">
							<input type="text" placeholder="search" />
							<button><i class="zmdi zmdi-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home Slider
============================================ -->
<div class="slider-wrap">
	<div id="mainSlider" class="nivoSlider slider-image">
		@foreach($slids_data as $k=>$v)
		<a href="#"><img src="uploads/{{ $v->simg }}" alt="main slider" title="#htmlcaption1"/></a>
		@endforeach
		<!-- <a href="#"><img src="./home_public/img/slider/2.jpg" alt="main slider" title="#htmlcaption2"/></a> -->
	</div>
	<div id="htmlcaption1" class="nivo-html-caption">			
		<div class="slide-text-right text-white slide-text">
			<div class="middle-text text-center">
				<h2 class="cap-sub-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">XOSS SHOP</h2>
				
	@foreach($notice as $k=>$v)
				<h1 class="cap-title wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="1.5s">{{ $v->notice }}</h1>
				
	@endforeach
				<p class="cap-dec wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="2.2s">See our full collection.s summer 2016 Lookbook</p>
				<a href="#" class="cap-readmore button color white-hover wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
			</div>										
		</div>
	</div>
	<div id="htmlcaption2" class="nivo-html-caption">				
		<div class="slide-text-left text-white slide-text">
			<div class="middle-text text-center">
				<h2 class="cap-sub-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">XOSS SHOP</h2>
				<h1 class="cap-title wow fadeInRight" data-wow-duration=".9s" data-wow-delay="1.5s">Women’s NEW FASHION</h1>
				<p class="cap-dec wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="2.2s">See our full collection.s summer 2016 Lookbook</p>
				<a href="#" class="cap-readmore button color white-hover wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
			</div>	
		</div>						
	</div>
</div>

<!-- Banner Add Area
============================================ -->

<!-- Latest Product Area
============================================ --> 
<div class="latest-product-area tab-product-area margin-bottom-25">
	<div class="container">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>最新商品</h1></div>
			<div class="col-xs-12">
				<!-- Product Tab List -->
				<div class="pro-tab-list text-center fix">
					<ul>
						<li class="active"><a href="#women" data-toggle="tab">最新上市商品</a></li>
					</ul>
				</div>
				<!-- Product Tab Content -->
				<div class="pro-tab-content tab-content row">
					<!-- Product Tab -->
					<div class="pro-tab tab-pane active" id="women">
						<!-- Single Product -->


						@foreach($new_goods as $k=>$v)
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="uploads/{{ $v->pic }}"  alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">加入购物车</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">{{ $v->gname }}</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ {{ $v->price }}</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						@endforeach




					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="men">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="accessories">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="trendy">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- Special Offer Area
============================================ -->

<!-- Feature Product Area
============================================ --> 
<div class="feature-product-area margin-bottom-90">
	<div class="container">
		<div class="row"> 
			<div class="section-title col-xs-12 text-center"><h1>特色产品</h1></div> 			<div class="col-xs-12">
				<!-- Product Slider -->
				<div class="product-slider feature-slider"> 
					<div class="sin-pro">
						<!-- Product Image -->
						<div class="sin-pro-img-action fix">
							<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
							<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							<!-- Product Action -->
							<div class="sin-pro-action">
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								<button class="pro-act-btn btn-text">add to bag</button>
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
							</div>
						</div>
						<!-- Product Details -->
						<div class="sin-pro-details fix">
							<a class="sin-pro-title" href="#">Full sleev women shirt</a>
							<!-- Product Price -->
							<div class="sin-pro-price float-left">
								<span class="new">$ 85.00</span>
							</div>
							<!-- Product Ratting -->
							<div class="sin-pro-ratting float-right">
								<div class="rattings float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star-half"></i>
								</div>
								<span>(23)</span>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="sin-pro">
						<!-- Product Image -->
						<div class="sin-pro-img-action fix">
							<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
							<span class="pro-label label-new">new</span>
							<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							<!-- Product Action -->
							<div class="sin-pro-action">
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								<button class="pro-act-btn btn-text">add to bag</button>
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
							</div>
						</div>
						<!-- Product Details -->
						<div class="sin-pro-details fix">
							<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
							<!-- Product Price -->
							<div class="sin-pro-price float-left">
								<span class="new">$ 45.00</span>
							</div>
							<!-- Product Ratting -->
							<div class="sin-pro-ratting float-right">
								<div class="rattings float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star-half"></i>
								</div>
								<span>(5)</span>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="sin-pro">
						<!-- Product Image -->
						<div class="sin-pro-img-action fix">
							<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
							<span class="pro-label label-new">new</span>
							<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							<!-- Product Action -->
							<div class="sin-pro-action">
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								<button class="pro-act-btn btn-text">add to bag</button>
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
							</div>
						</div>
						<!-- Product Details -->
						<div class="sin-pro-details fix">
							<a class="sin-pro-title" href="#">Women’s handbag</a>
							<!-- Product Price -->
							<div class="sin-pro-price float-left">
								<span class="new">$ 99.99</span>
								<span class="old">145.00</span>
							</div>
							<!-- Product Ratting -->
							<div class="sin-pro-ratting float-right">
								<div class="rattings float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star-half"></i>
								</div>
								<span>(23)</span>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="sin-pro">
						<!-- Product Image -->
						<div class="sin-pro-img-action fix">
							<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
							<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							<!-- Product Action -->
							<div class="sin-pro-action">
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								<button class="pro-act-btn btn-text">add to bag</button>
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
							</div>
						</div>
						<!-- Product Details -->
						<div class="sin-pro-details fix">
							<a class="sin-pro-title" href="#">Women’s winter dress</a>
							<!-- Product Price -->
							<div class="sin-pro-price float-left">
								<span class="new">$ 45.00</span>
							</div>
							<!-- Product Ratting -->
							<div class="sin-pro-ratting float-right">
								<div class="rattings float-left">
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
								</div>
								<span>(0)</span>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="sin-pro">
						<!-- Product Image -->
						<div class="sin-pro-img-action fix">
							<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
							<span class="pro-label label-new">new</span>
							<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							<!-- Product Action -->
							<div class="sin-pro-action">
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								<button class="pro-act-btn btn-text">add to bag</button>
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i><i class="zmdi zmdi-favorite-outline"></i></button>
							</div>
						</div>
						<!-- Product Details -->
						<div class="sin-pro-details fix">
							<a class="sin-pro-title" href="#">Full sleev women shirt</a>
							<!-- Product Price -->
							<div class="sin-pro-price float-left">
								<span class="new">$ 85.00</span>
							</div>
							<!-- Product Ratting -->
							<div class="sin-pro-ratting float-right">
								<div class="rattings float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star-half"></i>
								</div>
								<span>(23)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 
<!-- Blog Area
============================================ -->

<!-- Shipping Service Area
============================================ -->
<!-- <div class="blog-area bg-off-white padding-90">
	<div class="container">
		<div class='n1'style="border:1px solid red;display: inline-block">
			<img src="/uploads/images/1.jpeg" alt="我图片呢">
		</div>
		<div class='n2'style="border:1px solid red;display: inline-block">
			<img src="/uploads/images/1.jpeg" alt="我图片呢">
		</div>
		<div class='n3'style="border:1px solid red;display: inline-block">
			<img src="/uploads/images/1.jpeg" alt="我图片呢">
		</div>
		
	</div>
</div> -->
<!-- 广告开始 -->
<div class="latest-product-area tab-product-area margin-bottom-25">
	<div class="container">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>因为后台强大,被迫植入广告,所以为所欲为</h1></div>
			<div class="col-xs-12">
				<!-- Product Tab List -->
				<div class="pro-tab-list text-center fix">
<!-- 					<ul>
						<li class="active"><a href="#women" data-toggle="tab">最新上市商品</a></li>
					</ul> -->
				</div>
				<!-- Product Tab Content -->
				<div class="pro-tab-content tab-content row">
					<!-- Product Tab -->
					<div class="pro-tab tab-pane active" id="women">
						<!-- Single Product -->


						@foreach($adv as $k=>$v)
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="/uploads/{{ $v->guanggao }}"  alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"></a>
									<!-- Product Action -->
									<!-- <div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">加入购物车</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div> -->
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<!-- <a class="sin-pro-title" href="#">娃娃</a> -->
									<!-- Product Price -->
									<!-- <div class="sin-pro-price float-left">
										<span class="new">$ 111</span>
									</div> -->
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<!-- <div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div> -->
										
									</div>
								</div>
							</div>
						</div>
						@endforeach




					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="men">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="accessories">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="trendy">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- 广告结束 -->


<div class="shipping-service-area">
	<div class="container-fluid">
		<div class="row">
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-car"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>免费送货</h3>
					<p>Lorem ipsum虚拟文本到这里</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-balance-wallet"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>退款保证</h3>
					<p>Lorem ipsum虚拟文本到这里</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-shield-security"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>安全购物</h3>
					<p>Lorem ipsum虚拟文本到这里</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-headset-mic"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>退款保证</h3>
					<p>Lorem ipsum虚拟文本到这里</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer Top Area
============================================ -->
<div class="footer-top bg-off-white padding-top-80 padding-bottom-90">
	<div class="container">
		<div class="row">
			<!-- Footer Address -->
			<div class="sin-footer footer-address col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="footer-logo"><img src="./home_public/img/logo-2.png" alt="logo" /></div>
				<p><span>地址：</span> 28 Green Tower，Street Name，纽约，美国</p>
				<p><span>电话：</span> +88017 222 333</p>
				<p><span>电子邮件：</span>  contact@shopieee.com</p>
				<div class="footer-social">
					<a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
					<a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
					<a class="vimeo" href="#"><i class="zmdi zmdi-vimeo"></i></a>
					<a class="google-plus" href="#"><i class="zmdi zmdi-google-plus"></i></a>
					<a class="tumblr" href="#"><i class="zmdi zmdi-tumblr"></i></a>
					<a class="pinterest" href="#"><i class="zmdi zmdi-pinterest"></i></a>
				</div>
			</div>
			<!-- Footer Service -->
			<div class="sin-footer footer-service footer-link col-lg-3 col-md-2 col-sm-6 col-xs-12">
				<h3>services</h3>
				<ul>
					<li><a href="#">About us</a></li>
					<li><a href="#">Return Policy</a></li>
					<li><a href="#">Our Blog</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Terms & Condition</a></li>
				</ul>
			</div>
			<!-- Footer Account -->
			<div class="sin-footer footer-account footer-link col-lg-3 col-md-2 col-sm-6 col-xs-12">
				<h3>account</h3>
				<ul>
					<li><a href="#">Your Account</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
				</ul>
			</div>
			<!-- Footer Newsletter -->
			<div class="sin-footer footer-newsletter col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<h3>newsletter</h3>
				<p>Subscribe by our newsletter and get update protidin.</p>
				<form id="mc-form" class="mc-form footer-newsletter">
					<input id="mc-email" type="email" autocomplete="off" placeholder="Email Address">
					<input id="mc-submit" type="submit" value="subscribe" />
				</form>
				<!-- mailchimp-alerts Start -->
				<div class="mailchimp-alerts text-centre">
					<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
					<div class="mailchimp-success"></div><!-- mailchimp-success end -->
					<div class="mailchimp-error"></div><!-- mailchimp-error end -->
				</div><!-- mailchimp-alerts end -->
			</div>
		</div>
	</div>
</div>
<!-- Footer Bottom Area
============================================ -->
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<!-- Copyright -->
			<div class="copyright col-sm-6 col-xs-12 text-left">
				<p>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
			</div>
			<!-- Payment Method -->
			<div class="payment-method col-sm-6 col-xs-12 text-right">
				<img src="./home_public/img/payment-method.png" alt="" />
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- Quick View Area
============================================ -->
<div class="modal quick-view-modal animated zoomOut" id="pro-quick-view">
	<div class="table">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="quick-view-container fix">
					<button class="model-close" data-dismiss="modal"><i class="zmdi zmdi-close"></i></button>
						<!-- Product Details Image -->
						<div class="product-details-image col-md-6 col-xs-12">
							<ul class="quick-pro-thumb" role="tablist">
								<li class="active"><a href="#big-image-1" data-toggle="tab"><img src="./home_public/img/product-details/thumb-2.jpg" alt="" /></a></li>
								<li><a href="#big-image-2" data-toggle="tab"><img src="./home_public/img/product-details/thumb-1.jpg" alt="" /></a></li>
								<li><a href="#big-image-3" data-toggle="tab"><img src="./home_public/img/product-details/thumb-3.jpg" alt="" /></a></li>
								<li><a href="#big-image-4" data-toggle="tab"><img src="./home_public/img/product-details/thumb-4.jpg" alt="" /></a></li>
							</ul>
							<div class="quick-pro-big tab-content fix">
								<div class="tab-pane active" id="big-image-1"><img src="./home_public/img/product-details/big-2.jpg" alt="" /></div>								
								<div class="tab-pane" id="big-image-2"><img src="./home_public/img/product-details/big-1.jpg" alt="" /></div>								
								<div class="tab-pane" id="big-image-3"><img src="./home_public/img/product-details/big-3.jpg" alt="" /></div>								
								<div class="tab-pane" id="big-image-4"><img src="./home_public/img/product-details/big-4.jpg" alt="" /></div>								
							</div>
						</div>
						<!-- Product Details Content -->
						<div class="product-details-content col-md-6 col-xs-12">
							<a class="pro-details-title" href="#">Full sleev women shirt</a>
							<div class="pro-details-price-ratting fix">
								<!-- Product Price -->
								<div class="pro-details-price float-left">
									<span class="new">$ 45.00</span>
									<span class="old">(145.00)</span>
								</div>
								<!-- Product Ratting -->
								<div class="pro-details-ratting float-right">
									<div class="rattings float-left">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star-half"></i>
									</div>
									<span>(5)</span>
								</div>
							</div>
							<div class="pro-details-overview">
								<h5>overview:</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
							</div>
							<div class="pro-details-size fix">
								<h5>size:</h5>
								<a href="#">s</a>
								<a href="#">m</a>
								<a href="#">l</a>
								<a href="#">xl</a>
								<a href="#">xxl</a>
							</div>
							<div class="pro-details-color-quantity fix">
								<div class="pro-details-color float-left">
									<h5>color:</h5>
									<a href="#" class="color-1 active">color 1</a>
									<a href="#" class="color-2">color 2</a>
									<a href="#" class="color-3">color 3</a>
								</div>
								<div class="pro-details-quantity float-left">
									<h5>quantity:</h5>
									<div class="pro-qty float-left fix">
										<input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
									</div>
								</div>
							</div>
							<!-- Product Action -->
							<div class="pro-details-action fix">
								<button class="pro-details-act-btn btn-text">add to bag</button>
								<button class="pro-details-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								<button class="pro-details-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
							</div>
							<div class="pro-details-share fix">
								<h5>share this on:</h5>
								<div class="footer-social">
									<a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
									<a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
									<a class="vimeo" href="#"><i class="zmdi zmdi-vimeo"></i></a>
									<a class="google-plus" href="#"><i class="zmdi zmdi-google-plus"></i></a>
									<a class="tumblr" href="#"><i class="zmdi zmdi-tumblr"></i></a>
									<a class="pinterest" href="#"><i class="zmdi zmdi-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
 


<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="./home_public/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="./home_public/js/bootstrap.min.js"></script>
<!-- Nivo Slider JS
============================================ -->
<script src="./home_public/js/jquery.nivo.slider.pack.js"></script>
<!-- Mean Menu JS
============================================ -->
<script src="./home_public/js/jquery.meanmenu.min.js"></script>
<!-- Owl Carousel JS
============================================ -->
<script src="./home_public/js/owl.carousel.min.js"></script>
<!-- Count Down JS
============================================ -->
<script src="./home_public/js/jquery.countdown.min.js"></script>
<!-- ScrollUP JS
============================================ -->
<script src="./home_public/js/jquery.scrollup.min.js"></script>
<!-- TreeView JS
============================================ -->
<script src="./home_public/js/jquery.treeview.js"></script>
<!-- Price Slider JS
============================================ -->
<script src="./home_public/js/jquery-ui.min.js"></script>
<!-- simpleLens JS
============================================ -->
<script src="./home_public/js/jquery.elevateZoom-3.0.8.min.js"></script>
<!-- Magnific Popup JS
============================================ -->
<script src="./home_public/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Scroll JS
============================================ -->
<script src="./home_public/js/jquery.nicescroll.min.js"></script>

<!-- WOW JS
============================================ -->
<script src="./home_public/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>	
<!-- Main JS
============================================ -->
<script src="./home_public/js/main.js"></script>

</body>
</html> 
