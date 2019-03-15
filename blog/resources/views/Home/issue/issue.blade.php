@extends('Home.public.demo')

	@section('row')

 		<div class="blog-details-page blog-details-sidebar bg-off-white padding-bottom-90">
	<div class="container">
		<div class="row">
			<!-- Blog Sidebar -->
			<div class="col-md-3 col-xs-12 sidebar-container float-right">
				<div class="row">
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="sin-sidebar search-sidebar">
							<div class="search-sidebar-form">
								<form action="#">
									<input type="text" placeholder="Search">
									<button class="search-submit"><i class="zmdi zmdi-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="sin-sidebar category-sidebar">
							<h3 class="sidebar-title">问题</h3>
							<div class="sidebar-wrapper fix">
							<!-- treeview start -->
								<ul>
									<li><a href="#">Women</a></li>
									<li><a href="#">Men</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Jewelry</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Trends</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="sin-sidebar tags-sidebar">
							<h3 class="sidebar-title">文章</h3>
							<div class="sidebar-wrapper fix">
								<a href="#">App</a>
								<a href="#">Fashiondary</a>
								<a href="#">Fashion Tag</a>
								<a href="#">Logo Designer</a>
								<a href="#">Populat Tees</a>
								<a href="#">Designer</a>
								<a href="#">Most Recent</a>
							</div>
						</div>
					</div>  
				</div>
			</div>
			<!-- Blog Details -->
			<div class="col-md-9 col-xs-12 blog-container">
				<!-- Single blog -->
				<div class="sin-blog fix">
					<!-- Blog Image -->
					<div class="blog-image">
						<img src="img/blog/blog-details.jpg" alt="">
						<!-- Blog Date -->
						<div class="blog-date text-center"><h4>05</h4><p>May</p></div>
					</div>
					<!-- Blog Details -->
					<div class="blog-details">
						<!-- Blog Meta -->
						<div class="blog-meta fix">
							<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i> By Admin</a></p>
							<p class="comment-like float-right">
								<a href="#"><i class="zmdi zmdi-comment-outline"></i> (15)</a>
								<a href="#"><i class="zmdi zmdi-favorite-outline"></i> (225)</a>
							</p>
						</div>
						<!-- Blog Title -->
						<h4 class="blog-title">How to Improve Your Sales Volume</h4>
						<p>Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party. Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo. Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party. Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over.</p>
						<p>Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo. Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party. Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo. Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party.</p>
						<p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. </p>
					</div>
				</div>
	 	
			</div>
		</div>
	</div>
</div>
	@endsection