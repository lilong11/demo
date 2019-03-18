@extends('Home.public.index')

	@section('content') 
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
					<!-- Blog Details -->
					<div class="col-md-9 col-xs-12 blog-container">
				<div class="sin-list-pro fix" style="width:850px">
					<!-- Product Image -->
					<div class="sin-list-pro-img float-left">

						<a href="#" class="list-pro-img"><img src="img/product/1.jpg" alt="头像"></a>
						<span class="pro-label label-new">new</span>
						<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
					</div>
					<div class="list-pro-details fix">
						<a class="list-pro-title" href="#">用户名:admin</a> 
						<p class="list-pro-availability fix">用户名: <span class="in-stock"> admin </span></p> 
						<p class="list-pro-availability fix">性别: <span class="in-stock"> 男 </span></p> 
						<p class="list-pro-availability fix">城市: <span class="in-stock"> 浙江 </span></p> 
						<div class="list-pro-overview">
							<h5>个新签名:</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
						</div>
						<!-- Product Action -->
						<div class="list-pro-action">
							<button class="list-pro-act-btn btn-text">修改信息</button>
							<button class="list-pro-act-btn btn-icon">修改密码</button> 
						</div>
					</div>
				</div>
					</div>
				</div>
			</div>
		</div>
	@endsection