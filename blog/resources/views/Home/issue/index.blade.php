@extends('Home.public.index')
	@section('content') 
	<div class="main-content-wrapper">

		<div class="blog-page bg-off-white padding-bottom-90">
			<div class="container">
				<div class="row">
					<div class="blog-container fix"> 
						@foreach($issues as $v)
						<!-- 文章遍历列表-->
						<div class="sin-blog col-lg-4 col-sm-6 col-xs-12">


							<!-- Blog Details -->
							<div class="blog-details">
								<!-- Blog Meta -->
								<div class="blog-meta fix">
									<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
			                            123
									</font></font></a></p>
									<p class="comment-like float-right">
										<a href="#"><i class="zmdi zmdi-comment-outline"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> （15）</font></font></a>
										<a href="#"><i class="zmdi zmdi-favorite-outline"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> （225）</font></font></a>
									</p>
								</div>
								<!-- Blog Title -->
								<h4 class="blog-title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->title }}</font></font></a></h4>
								<p><font style="vertical-align: inherit;"></font></p>
								<a class="read-more" href="/issues/{{ $v->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阅读</font></font></a>
							</div>
						</div>
						@endforeach

						

					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-top bg-off-white padding-top-80 padding-bottom-90">
			<div class="container">
				<div class="row">
					<!-- Footer Address -->
					<div class="sin-footer footer-address col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="footer-logo"><img src="img/logo-2.png" alt="商标"></div>
						<p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址：</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 28 Green Tower，Street Name，纽约，美国</font></font></p>
						<p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电话：</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> +88017 222 333</font></font></p>
						<p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电子邮件：</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> contact@shopieee.com</font></font></p>
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
						<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务</font></font></h3>
						<ul>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于我们</font></font></a></li>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货政策</font></font></a></li>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的博客</font></font></a></li>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></a></li>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">条款与协议</font></font></a></li>
						</ul>
					</div>
					<!-- Footer Account -->
					<div class="sin-footer footer-account footer-link col-lg-3 col-md-2 col-sm-6 col-xs-12">
						<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐户</font></font></h3>
						<ul>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">你的帐户</font></font></a></li>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">查看</font></font></a></li>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录</font></font></a></li>
							<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">寄存器</font></font></a></li>
						</ul>
					</div>
					<!-- Footer Newsletter -->
					<div class="sin-footer footer-newsletter col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通讯</font></font></h3>
						<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通过我们的时事通讯订阅并获得更新protidin。</font></font></p>
						<form id="mc-form" class="mc-form footer-newsletter">
							<input id="mc-email" type="email" autocomplete="off" placeholder="Email Address">
							<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input id="mc-submit" type="submit" value="订阅"></font></font>
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
						<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">版权所有©2018。公司名称保留所有权利。</font></font><a target="_blank" href="http://sc.chinaz.com/moban/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网页模板</font></font></a></p>
					</div>
					<!-- Payment Method -->
					<div class="payment-method col-sm-6 col-xs-12 text-right">
						<img src="img/payment-method.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection