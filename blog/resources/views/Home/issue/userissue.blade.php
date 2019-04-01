@extends('Home.public.index')
	@section('content') 
	<div class="main-content-wrapper">
	<div class="page-breadcrumb bg-off-white">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="breadcrumbs">
						<li><a href="/">家</a></li>
						@if(!empty(session('home')))
						<li><a href="/userIssue/{{ session('home') }}"><span>我的问题</span></a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>


		<div class="blog-page bg-off-white padding-bottom-90">
			<div class="container">
				<div class="row">
					<div class="blog-container fix"> 
						@foreach($data as $v)
						<!-- 文章遍历列表-->
						<div class="sin-blog col-lg-4 col-sm-6 col-xs-12">


							<!-- Blog Details -->
							<div class="blog-details">
								<!-- Blog Meta -->
								<div class="blog-meta fix">
									
									<p class="comment-like float-right">
										<a href="#"><i class="zmdi zmdi-comment-outline"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> （15）</font></font></a>
										<a href="#">
				                            @switch($v -> status)
				                           		@case(0)
				                           			<span style="color:green;">您的问题已通过</span>
				                           		@break
				                           		@case(1)
				                           			<span style="color:red;">您的问题已被禁用</span>
				                           		@break
				                           		@case(2)
				                           			<span style="color:red;">待管理员审核</span>
				                           		@break
				                           	@endswitch 
										</a>
									</p>
								</div>
								<!-- Blog Title -->
								<h4 class="blog-title"><a href="/issues/{{ $v->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->title }}</font></font></a></h4>
								<p><font style="vertical-align: inherit;"></font></p>
								<a class="read-more" href="/issues/{{ $v->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阅读</font></font></a>
							</div>
						</div>
						@endforeach

						

					</div>
				</div>
			</div>
		</div>
		


	</div>
	@endsection