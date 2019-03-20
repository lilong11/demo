@extends('Home.user_public.index')

    @section('content')
		<!-- 文章右边的内容 -->
		 <div class="col-md-9 col-xs-12 blog-container">
				<!-- Single blog -->
				<div class="sin-blog fix">
					<!-- Blog Image -->
					<div class="blog-image">
						<img src="Home_public/img/blog/blog-details.jpg" style="width:870px;height:400px">
						<!-- Blog Date -->
						<div class="blog-date text-center"><h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">05</font></font></h4><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">123</font></font></p></div>
					</div>
					<!-- Blog Details -->
					<div class="blog-details">
						<!-- Blog Meta -->
						<div class="blog-meta fix">
							<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 由管理员</font></font></a></p>
							<p class="comment-like float-right">
								<a href="#"><i class="zmdi zmdi-comment-outline"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> （15）</font></font></a>
								<a onclick="love()" name="loves"><i class="zmdi zmdi-favorite-outline"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 喜欢（225）</font></font></a>
							</p>
						</div>
						<!-- Blog Title -->
						<h4 class="blog-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$workShow->title}}</font></font></h4>
						<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							{{$workShow->content}}
						</font></p>
						
					</div>
				</div>
				
			</div>
    @endsection