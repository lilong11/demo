{{--头部引入--}}
@include('Home.public.head')

<div class="main-content-wrapper"> 

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

 

	<!-- <div class="blog-details-page blog-details-sidebar bg-off-white padding-bottom-90"> -->
	<div class="page-breadcrumb bg-off-white">
		<div class="container">
			<div class="row"> 
			@section('content') 
 
			@show
			</div>
		</div>
	</div> 

</div>

{{--头部引入--}}
@include('Home.public.footer')

