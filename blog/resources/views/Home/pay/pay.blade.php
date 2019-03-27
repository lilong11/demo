<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

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
	<!-- Modernizer JS
	============================================ -->
	<script src="/home_public/js/vendor/modernizr-2.8.3.min.js"></script>
	<style>
		.bgcolor1{
			height:1100px ;width:100%;

			background-color: #f5f5f5;
			padding-top:40px ;
		}
		.bgcolor2{
			height:200px ;width:1226px;
			margin: 0px auto;
			background-color:white;
			padding-top:40px ;

		}
		.bgcolor3{
			height:500px ;width:1226px;
			margin: 0px auto;
			background-color:white;
			padding-top:40px ;
			margin-top: 30px;
		}
		.bgcolor4{
			height:160px ;width:1226px;
			margin: 0px auto;
			background-color:white;
			padding-top:40px ;
			margin-top: 30px;
		}
		.bgcolor2_left{
		    width: 80px;
		    height: 80px;
			background:url("../home_public/img/pay/打钩.png") round;
			margin-top: 30px;
			margin-left: 60px;
		    float: left;

		}
		.bgcolor2_text1{
			height:36px ;width:625px;
		    float: left;
			margin-top: 50px;
			margin-left: 50px;
			line-height: 36px;
			font-size: 26px;
		}
		.bgcolor2_text2{
			height:90px ;width:130px;
			float: right;
			margin-top: 30px;
			margin-right: 50px;
		}
		.bgcolor2_text3{
			height:36px ;width:130px;
			line-height: 36px;
			font-size: 15px;
			color: #757575;
		}
		.bgcolor2_text4{
			height:36px ;width:130px;
			line-height: 36px;
			font-size: 15px;
			margin-top: 10px;
			text-align: center;
			color: #757575;

		}
		.bgcolor3_one{
			height:51px ;width:1130px;
			font-size: 18px;
			border-bottom: 1px solid #757575;
			margin: 0px auto;

			
		}
		.bgcolor3_two{
			height:120px ;width:1130px;
			margin: 30px auto;
			font-size: 18px;
			
		}
		.bgcolor3_two>ul{
			height:76px ;width:1130px;
			margin: 10px auto;
			/* background-color: pink; */
			
		}
		.bgcolor3_two>ul>li{
			height:60px ;width:174px;
			float: left;
			margin-left: 15px;
			margin-top: 8px;
			border: 1px solid #e0e0e0;
			background-color: white;
			
		}
		.bgcolor3_three{
			height:191px ;width:1130px;
			margin: 0px auto;
			font-size: 18px;

		}
		.bgcolor3_three>ul{
			height:150px ;width:1130px;
			margin: 10px auto;
			/* background-color: pink; */
			
		}
		.bgcolor3_three>ul>li{
			height:60px ;width:174px;
			float: left;
			margin-left: 9px;
			margin-top: 8px;
			border: 1px solid #e0e0e0;
			
		}
		.gengduo{
			line-height: 60px;
			font-size: 15px;
			text-align: center;
			color: #757575;
		}

		.bgcolor41{
			height:150px ;width:1130px;
			margin: -25px auto;
		}
		.bgcolor4_text1{
			height: 40px;width: 188px;
			font-size: 18px;
		}
		.bgcolor4_text2{
			height: 60px;width: 188px;
			/*border: 1px solid #e0e0e0 ;*/
			background-color: #f25807;
			
			color: white;
			line-height: 60px;
			text-align: center;
			margin-top: 20px;
			/*float: left;*/
			
		}
		.bgcolor4_text2 a{
			text-decoration: none;
			color: white;
			text-decoration: none;
		}
	</style>
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
					<!-- Header Language Currency -->
					<ul class="header-lan-cur float-left">
						<!-- Header Language -->
						<li><a href="/">首页</a></li>
						<li><a href="">文章</a></li>
						<li><a href="">问题</a></li>
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
									<a href="#" class="mc-pro-image float-left"><img src="/home_public/img/mini-cart/1.jpg" alt="" /></a>
									<div class="mc-pro-details fix">
										<a href="#">Women’s winter dress</a>
										<span>1x$45.00</span>
										<button class="pro-del"><i class="zmdi zmdi-delete"></i></button>
									</div>
								</div>
								<div class="mc-sin-pro fix">
									<a href="#" class="mc-pro-image float-left"><img src="home_public/img/mini-cart/2.jpg" alt="" /></a>
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
								<a class="button small transparent" href="/users/create">立即注册</a>
							</div>
						</div>
					</div>
					@else
					<div class="header-account-login float-right">
						<!-- 右边模块 -->
						<ul class="header-acc float-left">
							<li><a href="/users">个人中心<i class="zmdi zmdi-chevron-down"></i></a>
								<ul class="top-sub-menu sub-menu-right">
									<li><a href="#">个人中心</a></li> 
									<li><a href="#">我的收藏</a></li>  
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
	<!-- Header Bottom -->
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-bottom-wrap">
					<!-- Logo -->
					<div class="header-logo col-lg-3 col-md-2">
						<div class="logo"><a href="index.html"><img src="/home_public/img/logo-3.png" alt="logo" /></a></div>
					</div>
					<!-- Main Menu -->
					<div class="main-menu-wrap col-lg-6 col-md-7 hidden-sm hidden-xs">
						<div class="main-menu text-center">
							<nav>
								<ul>
									<li><a href="#">衣服<i class="zmdi zmdi-chevron-down"></i></a>
										<!-- Mega Menu -->
										<div class="mega-menu mega-menu-link mm-right">

											<div class="mm-column mm-column-link float-left">
												<h4>shop pages</h4>
												<a href="shop.html">shop grid</a>
											</div>
										</div>
									</li> 
									<li><a href="#">鞋子<i class="zmdi zmdi-chevron-down"></i></a>
										<!-- Mega Menu -->
										<div class="mega-menu mega-menu-link mm-right">

											<div class="mm-column mm-column-link float-left">
												<h4>shop pages</h4>
												<a href="shop.html">shop grid</a>
											</div>
										</div>
									</li> 
									<li><a href="#">手表<i class="zmdi zmdi-chevron-down"></i></a>
										<!-- Mega Menu -->
										<div class="mega-menu mega-menu-link mm-right">

											<div class="mm-column mm-column-link float-left">
												<h4>shop pages</h4>
												<a href="shop.html">shop grid</a>
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







<div class="bgcolor1">   <!-- 主体部分 -->
		<div class="bgcolor2">
			<div class="bgcolor2_left"></div>
			<div class="bgcolor2_text1">订单提交成功！去付款咯～</div>
		</div>
		<div class="bgcolor3">
			<div class="bgcolor3_one">选择以下支付方式付款</div>
			<div class="bgcolor3_two">
				支付平台
				<ul>
					<li><img src="../home_public/img/pay/weixinpay.png" alt="" width="174"></li>
					<li><img src="../home_public/img/pay/event-alipay20160718.jpg" alt="" width="174"></li>
					<li><img src="../home_public/img/pay/unionpay.png" alt="" width="174"></li>
					<li><img src="../home_public/img/pay/micash.png" alt="" width="174"></li>
				</ul>
			</div>
			<div class="bgcolor3_three">
					银行借记卡及信用卡
					<ul>
						<li><img src="../home_public/img/pay/payOnline_zsyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_gsyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_jsyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_jtyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_nyyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_zgyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_youzheng.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_gfyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_pufa.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_gdyh.png" alt="" width="174"></li>
						<li><img src="../home_public/img/pay/payOnline_xyyh.png" alt="" width="174"></li>
						<li class="gengduo">查看更多</li>
					</ul>
			</div>
		</div>
		<div class="bgcolor4">
			<div class="bgcolor41">
				<div class="bgcolor4_text1">支付</div>
				<a href="/orders/pay/{{ $oid }}"><div class="bgcolor4_text2">确认支付</div></a>
			</div>
		</div>
	</div>






















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
				<div class="brand-slider">
					<div class="sin-brand"><img src="home_public/img/brands/1.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/2.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/3.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/4.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/5.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/6.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/7.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/8.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/9.png" alt="" /></div>
					<div class="sin-brand"><img src="home_public/img/brands/10.png" alt="" /></div> 
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
				<div class="footer-logo"><img src="home_public/img/logo-2.png" alt="logo" /></div>
				<p><span>ADDRESS:</span> 28 Green Tower, Street Name New York City, USA</p>
				<p><span>Telephone:</span> +88017 222 333</p>
				<p><span>Email:</span> contact@shopieee.com</p>
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
				<img src="home_public/img/img/payment-method.png" alt="" />
			</div>
		</div>
	</div>
</div>
</div>
</div>











































<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="/home_public/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="/home_public/js/bootstrap.min.js"></script>
<!-- Nivo Slider JS
============================================ -->
<script src="/home_public/js/jquery.nivo.slider.pack.js"></script>
<!-- Mean Menu JS
============================================ -->
<script src="/home_public/js/jquery.meanmenu.min.js"></script>
<!-- Owl Carousel JS
============================================ -->
<script src="/home_public/js/owl.carousel.min.js"></script>
<!-- Count Down JS
============================================ -->
<script src="/home_public/js/jquery.countdown.min.js"></script>
<!-- ScrollUP JS
============================================ -->
<script src="/home_public/js/jquery.scrollup.min.js"></script>
<!-- TreeView JS
============================================ -->
<script src="/home_public/js/jquery.treeview.js"></script>
<!-- Price Slider JS
============================================ -->
<script src="/home_public/js/jquery-ui.min.js"></script>
<!-- simpleLens JS
============================================ -->
<script src="/home_public/js/jquery.elevateZoom-3.0.8.min.js"></script>
<!-- Magnific Popup JS
============================================ -->
<script src="/home_public/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Scroll JS
============================================ -->
<script src="/home_public/js/jquery.nicescroll.min.js"></script>

<!-- WOW JS
============================================ -->
<script src="/home_public/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>	
<!-- Main JS
============================================ -->
<script src="/home_public/js/main.js"></script>

</body>
</html>
