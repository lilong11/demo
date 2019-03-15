@extends('Home.public.index')

    @section('content')
		<!-- 文章右边的内容 -->
		<div class="col-md-3 col-xs-12 sidebar-container float-right">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="sin-sidebar search-sidebar">
						<div class="search-sidebar-form">
							<form action="#">
								<input type="text" placeholder="Search" />
								<button class="search-submit"><i class="zmdi zmdi-search"></i></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="sin-sidebar category-sidebar">
						<h3 class="sidebar-title">文章</h3>
						<div class="sidebar-wrapper fix">
						<!-- treeview start -->
							<ul>
								@foreach($data as $k )
								<li><a href="#">{{ $k -> title }}</a></li> 
								@endforeach
							</ul>
						</div>
					</div>
				</div>  
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="sin-sidebar category-sidebar">
						<h3 class="sidebar-title">问题</h3>
						<div class="sidebar-wrapper fix">
						<!-- treeview start -->
							<ul>
								@foreach($datas as $k )
								<li><a href="#">{{ $k -> title }}</a></li> 
								@endforeach
							</ul>
						</div>
					</div>
				</div>  
			</div>
		</div>
		<!-- 文章左边的内容 -->
		<div class="col-md-9 col-xs-12 blog-container">
			<!-- Single blog -->
			<div class="sin-blog fix">
				<!-- Blog Image -->
				<div class="blog-image">
					<img src="home_public/img/blog/blog-details.jpg" alt="" />
					<!-- Blog Date -->
					<div class="blog-date text-center"><h4>05</h4><p>可以</p></div>
				</div>
				<!-- Blog Details -->
				<div class="blog-details">
					<!-- Blog Meta -->
					<div class="blog-meta fix">
						<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i> 后台用户发布者名字</a></p>
						<p class="comment-like float-right">
							<a href="#"><i class="zmdi zmdi-comment-outline"></i> (喜欢15)</a>
							<a href="#"><i class="zmdi zmdi-favorite-outline"></i> (评论225)</a>
						</p>
					</div>
					<!-- Blog Title -->
					<h4 class="blog-title">如何安全合法购物??</h4>
					<p>
						@foreach($data as $k )
							123
						@endforeach
					</p>
					
				</div>
			</div>
		</div>
    @endsection