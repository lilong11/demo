@extends('Home.public.index')

	        @section('top')
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-xs-4 header-top-left">
								<!-- Header Language Currency -->
								<ul class="header-lan-cur float-left">
									<!-- Header Language -->
									<li><a href="/">首页</a></li> 
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
								<!-- Header Account Login -->
								<div class="header-account-login float-right">
									<!-- Header Account -->
									<ul class="header-acc float-left">
										<li><a href="#">个人中心<i class="zmdi zmdi-chevron-down"></i></a>
											<ul class="top-sub-menu sub-menu-right">
												<li><a href="#">我的订单</a></li>
												<li><a href="#">我的收藏</a></li>
											</ul>
										</li>
									</ul>
									<!-- Header Login -->
									<div class="header-login float-left text-center">
										<a href="#">登入 <i class="zmdi zmdi-chevron-down"></i></a>
										<div class="header-login-opt top-sub-menu sub-menu-right">
											<h5>登入 或者 注册</h5>
											<a class="button small" href="/home/login">登入</a>
											<span>or</span>
											<a class="button small transparent" href="/create">立即 注册</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
        	@endsection