@extends('Home.public.index')
@section('content')
<div class="main-content-wrapper">
<!-- Page Breadcrumb Area
============================================ -->
<div class="page-breadcrumb bg-off-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumbs">
					<li><a href="/">首页</a></li>
					<li><a href="/homegoods">商城</a></li>
					<li><span>商品详情</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Product Details Area
============================================ -->
<div class="product-details-page bg-off-white padding-bottom-90">
	<div class="container">
		<div class="row">
			<!-- Product Details Image -->
			<div class="product-details-image col-md-6 col-xs-12">
				<div class="pro-img-thumb thumb-vertical" id="pro-img-thumb">
					
					<div class="htmleaf-container"  style="width:550px;">
					<div class="exzoom" id="exzoom">
					    <!-- 大图区域 -->
					    
					    <div class="exzoom_img_box">
					        <ul class='exzoom_img_ul'>
					        	@foreach($goodsDePic as $k=>$v)
					            <li><img src="{{ $v }}"/></li>
					            @endforeach
					        </ul>
					    </div>
					    
					    <!-- 缩略图导航 -->
					    <div class="exzoom_nav"></div>
					    <!-- 控制按钮 -->
					    <p class="exzoom_btn">
					        <a href="javascript:void(0);" class="exzoom_prev_btn"> &lt; </a>
					        <a href="javascript:void(0);" class="exzoom_next_btn"> &gt; </a>
					    </p>
					</div>
					</div>
					
				</div>
			</div>
			<!-- Product Details Content -->
			@foreach($goods as $k=>$v)
			<div class="product-details-content col-md-6 col-xs-12">
				<a class="pro-details-title" href="#">{{ $v->gname }}</a>
				<div class="pro-details-price-ratting fix">
					<!-- Product Price -->
					<div class="pro-details-price float-left">
						<span class="new">$ {{ $v->price }}</span>
						
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
					<h5>商品简介:</h5>
					<p>{{ $v->goodsDes }}</p>
				</div>
				<div class="pro-details-size fix">
					<h5>尺寸:</h5>

					@foreach($gsize_datas as $kk=>$vv )
					<label>
						<input type="radio" name="size" class="btn btn-success" style="width:100px,height:30px" gid='{{ $vv->gid }}' uname='{{ $vv->uname }}' value="{{ $vv->id }}" onclick="show(this)">{{ $vv->gsizename }}
					</label>
					@endforeach
				</div>
				
				<!-- Product Action -->
				<div class="pro-details-action fix">
					<a href="/cart"><button class="pro-details-act-btn btn-text">加入购物车</button></a>
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
			@endforeach
		</div>
		@foreach($details_goods as $key=>$value)
		<div class="row margin-top-30">
			<div class="col-xs-12">
				<div class="pro-details-tab-container fix">
					<ul class="pro-details-tablist fix">
						<li class="active"><a href="#description" data-toggle="tab">简介</a></li>
						
						<li><a href="#reviews" data-toggle="tab">reviews</a></li>        
					</ul>
					<div class="tab-content fix">
						<!-- Product Info Tab -->
						<div id="description" class="pro-details-tab pro-dsc-tab tab-pane active">
							<p>{{ $value->content }}</p>
							<ul style="font-size:12px;">
								<li>安全提示：不要接收可疑文件和不要点击不明来源的链接，支付前核实好域名和支付详情。 本商城不会以订单有问题，让您提供任何银行卡、密码、手机验证码！遇到可疑情况可在钱盾“诈骗举报”中进行举报, 安全推荐</li>
								<li>内容申明：本商城为第三方交易平台及互联网信息服务提供者，商城（含网站、客户端等）所展示的商品/服务的标题、价格、详情等信息内容系由商城经营者发布，其真实性、准确性和合法性均由商城经营者负责。本商城提醒用户购买商品/服务前注意谨慎核实。如用户对商品/服务的标题、价格、详情等任何信息有任何疑问的，请在购买前通过商城经营者沟通确认；</li>
								
							</ul>
						</div>
						<!-- Product Info Tab -->
						<div id="information" class="pro-details-tab pro-info-tab tab-pane">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<!-- Product Info Tab -->
						<div id="reviews" class="pro-details-tab pro-rev-tab tab-pane">
							<div class="pro-avg-ratting fix">
								<h4>4.5 <span>(Overall)</span></h4>
								<span>Based on 9 Comments</span>
							</div>
							<div class="ratting-list fix">
								<div class="sin-list float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<span>(5)</span>
								</div>
								<div class="sin-list float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<span>(3)</span>
								</div>
								<div class="sin-list float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<span>(1)</span>
								</div>
								<div class="sin-list float-left">
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<span>(0)</span>
								</div>
								<div class="sin-list float-left">
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<i class="zmdi zmdi-star-outline"></i>
									<span>(0)</span>
								</div>
							</div>
							<div class="rattings-wrapper fix">
								<div class="sin-rattings">
									<div class="ratting-star float-left">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
									<span>(5)</span>
									</div>
									<div class="ratting-author float-right">
										<h3>Nirob Khan</h3>
										<span>12:24</span>
										<span>5 March 2016</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
								</div>
								<div class="sin-rattings">
									<div class="ratting-star float-left">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
									<span>(5)</span>
									</div>
									<div class="ratting-author float-right">
										<h3>Nirob Khan</h3>
										<span>12:24</span>
										<span>5 March 2016</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis strud. incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud.</p>
								</div>
								<div class="sin-rattings">
									<div class="ratting-star float-left">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
									<span>(5)</span>
									</div>
									<div class="ratting-author float-right">
										<h3>Nirob Khan</h3>
										<span>12:24</span>
										<span>5 March 2016</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis strud. incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud.</p>
								</div>
							</div>
							<div class="ratting-form-wrapper fix">
								<h3>Add your Comments</h3>
								<div class="ratting-form">
									<form action="#">
										<div class="star-box">
											<h2>Rating:</h2>
											<div class="ratting-star fix">
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
										</div>
										<div class="input-box-2 fix">
											<div class="input-box float-left">
												<label for="name">Name:</label>
												<input type="text" id="name" placeholder="Type your name">
											</div>
											<div class="input-box float-left">
												<label for="email">Email:</label>
												<input type="text" id="email" placeholder="Type your email address">
											</div>
										</div>
										<div class="input-box review-box fix">
											<label for="your-review">Your Review:</label>
											<textarea name="review" id="your-review" placeholder="Write a review"></textarea>
										</div>
										<div class="input-box submit-box fix">
											<input type="submit" value="add review">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- Suggested Product Area
============================================ -->
<div class="feature-product-area margin-bottom-90">
	<div class="container">
		<div class="row"> 
			<div class="section-title col-xs-12 text-center"><h1>特色产品</h1></div> 			<div class="col-xs-12">
				<!-- Product Slider -->
				<div class="product-slider feature-slider">
					@foreach($goods_data as $k=>$v) 
					<div class="sin-pro">
						<!-- Product Image -->
						<div class="sin-pro-img-action fix">
							<a href="/detailgoods?id={{ $v->id }}" class="sin-pro-img"><img src="uploads/{{ $v->pic }}" alt="" /></a>
							<a href="/detailgoods?id={{ $v->id }}" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
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
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<!-- Copyright -->
			<div class="copyright col-sm-6 col-xs-12 text-left">
				<p>Copyright © 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">网页模板</a></p>
			</div>
			<!-- Payment Method -->
			<div class="payment-method col-sm-6 col-xs-12 text-right">
				<img src="img/payment-method.png" alt="">
			</div>
		</div>
	</div>
</div>
</div>
<script src="/home_public/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="/home_public/src/jquery.exzoom.js"></script>
    	<script type="text/javascript">
	    $("#exzoom").exzoom({
	        autoPlay: false,
	    });
	   
	</script>
	<script>

		function show(obj){
			var size = $(obj).val();
			var gid = $(obj).attr('gid');
			var uname = $(obj).attr('uname');

				$.ajaxSetup({
	    		headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		}
			});
		

		$.ajax({
	            url:'/cart/store',
	            method: "POST",
	            data: {'size':size,'gid':gid,'uname':uname, "_token":"{{csrf_token()}}"},
	            dataType: "json",
	           	success:function(data){
				  //数据给后端php文件并成功返回
				  console.log(data);//打印返回的值
				
				} ,
				error:function(data){
				  //数据给后端后返回错误
				  console.log(data);//打印返回的信息
				}
	   		});
		}
	</script>

@endsection