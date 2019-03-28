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
					<li><a href="#">home</a></li>
					<li><a href="#">category</a></li>
					<li><span>full grid</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Shop Product Area
============================================ -->
<div class="shop-page bg-off-white padding-bottom-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 margin-bottom-30">
				<div class="shop-toolbar shop-toolbar-top fix">
					<div class="row">
						<div class="col-sm-3 col-xs-5 view-mode text-left">
							<a class="grid active" href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-apps"></i></a>
							<a class="list" href="#list-view" data-toggle="tab"><i class="zmdi zmdi-storage"></i></a>
						</div>
						<div class="col-sm-3 col-xs-7 pro-show text-right float-right">
							<div class="show-wrap">
								<label>show:</label>
								<select class="show-select">
									<option>9</option>
									<option>16</option>
									<option>32</option>
									<option>ALL</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 short-by text-center">
							<div class="short-by-wrap">
								<label>short by:</label>
								<select class="sort-select">
									<option>Name Ascending</option>
									<option>Name Descending</option>
									<option>Date Ascending</option>
									<option>Date Descending</option>
									<option>Price Ascending</option>
									<option>Price Descending</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tab-content shop-pro-tab-container">
				<div class="tab-pane active" id="grid-view">
					<!-- 商城 -->
					@foreach($goods as $k=>$v)
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">

							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="detailgoods?id={{ $v->id }}" class="sin-pro-img"><img src="uploads/{{ $v->pic}}" alt=""></a>
								<a href="detailgoods?id={{ $v->id }}" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">加入购物车</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="detailgoods?id={{ $v->id }}">{{ $v->gname }}</a>
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
				<div class="tab-pane" id="list-view">
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="img/product/1.jpg" alt=""></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
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
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="img/product/2.jpg" alt=""></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
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
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="img/product/7.jpg" alt=""></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
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
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="img/product/4.jpg" alt=""></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
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
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="img/product/5.jpg" alt=""></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
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
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="img/product/6.jpg" alt=""></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
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
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="shop-toolbar shop-toolbar-bottom fix">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-3 view-mode text-left">
							<a class="grid active" href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-apps"></i></a>
							<a class="list" href="#list-view" data-toggle="tab"><i class="zmdi zmdi-storage"></i></a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-9 short-by text-right float-right">
							<div class="short-by-wrap">
								<label>short by:</label>
								<select class="sort-select">
									<option>Name Ascending</option>
									<option>Name Descending</option>
									<option>Date Ascending</option>
									<option>Date Descending</option>
									<option>Price Ascending</option>
									<option>Price Descending</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-sm-5 col-xs-12 pagination text-center">
							<ul>
								<li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#" class="active">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Shipping Service Area
============================================ -->
<div class="shipping-service-area">
	<div class="container-fluid">
		<div class="row">
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-car"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>free shipping</h3>
					<p>Lorem ipsum dummy text goes here</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-balance-wallet"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>money back guarantee</h3>
					<p>Lorem ipsum dummy text goes here</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-shield-security"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>safe shopping</h3>
					<p>Lorem ipsum dummy text goes here</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-headset-mic"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>online support</h3>
					<p>Lorem ipsum dummy text goes here</p>
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
				<div class="footer-logo"><img src="img/logo-2.png" alt="logo"></div>
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
					<li><a href="#">Terms &amp; Condition</a></li>
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
					<input id="mc-submit" type="submit" value="subscribe">
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

@endsection