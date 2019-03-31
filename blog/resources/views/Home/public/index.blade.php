{{--头部引入--}}
@include('Home.public.head')

<div class="main-content-wrapper">

<div class="page-breadcrumb bg-off-white">
	<div class="container">
		<div class="row"> 
		@section('content')
		
		@show
		</div>
	</div>
</div>

{{--底部引入--}}
</div>
@include('Home.public.footer')

