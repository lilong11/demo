@extends('Home.public.index')
	@section('content') 
		<div class="main-content-wrapper">
		<div class="page-breadcrumb bg-off-white">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="breadcrumbs">
							<li><a href="/">家</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="blog-page bg-off-white padding-bottom-90">
			<div class="container">
				<div class="row">
					<div class="blog-container fix"> 
						@foreach($workss as $v)
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
								<h4 class="blog-title"><a href="/workss/{{$v->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->title }}</font></font></a></h4>
								<p><font style="vertical-align: inherit;"></font></p>
								<a class="read-more" href="/workss/{{$v->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阅读</font></font></a>
							</div>
						</div>
						@endforeach

						

					</div>
				</div>
			</div>
		</div>
		


	</div>
	@endsection