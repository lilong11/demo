{{--头部引入--}}
@include('Home.public.head')

<div class="main-content-wrapper">
<!-- Page Breadcrumb Area
============================================ -->
<div class="page-breadcrumb bg-off-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumbs">
					<li><a href="/">家</a></li>
					<li><span>{{$title or '列表' }}</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Blog Details Page
============================================ -->
<div class="blog-details-page blog-details-sidebar bg-off-white padding-bottom-90">
	<div class="container">
		<div class="row">
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
										@foreach($works as $k )
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
										@foreach($issues as $k )
										<li><a href="#">{{ $k -> title }}</a></li> 
										@endforeach
									</ul>
								</div>
							</div>
						</div>  
					</div>
				</div>
			 @section('content')

	         @show
		</div>
	</div>
</div>

{{--底部引入--}}
@include('Home.public.footer')

