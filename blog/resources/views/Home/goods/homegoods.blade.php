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
					<li><span>商城</span></li>
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
						<div class="col-sm-6 col-xs-12 short-by text-center">
							<div class="short-by-wrap">
								<label>商城</label>
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
									<a href="/Collectionadd/{{ $v->id }}" class="pro-act-btn btn-icon">&nbsp;&nbsp;<i class="zmdi zmdi-favorite-outline"></i></a>
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
				
			</div>

			<div class="col-xs-12">
				<div class="shop-toolbar shop-toolbar-bottom fix">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-3 view-mode text-left">
							<a class="grid active" href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-apps"></i></a>
							<a class="list" href="#list-view" data-toggle="tab"><i class="zmdi zmdi-storage"></i></a>
						</div>
						
						<div class="col-lg-6 col-sm-5 col-xs-12 pagination text-center">
							
								{{ $goods->links() }}
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection