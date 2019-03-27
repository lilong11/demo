@extends('Home.public.index')
        
        @section('title','购物车')
        @section('content')


<div class="shop-page bg-off-white padding-bottom-90">
	<div class="container">
		<div class="row">
			
			
			<div class="tab-content shop-pro-tab-container">
				<div class="tab-pane active" id="grid-view">
					 @foreach($goods as $k=>$v)
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							
							<div class="sin-pro-img-action fix">
								<img src="./uploads/{{ $v->pic }}" alt="" style="width:500px" >
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<a href="/cart/store/{{ $v->id }}"><button class="pro-act-btn 	btn-text">加入</button></a>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">{{ $v->gname }}</a>
								
								
									<span class="">$ {{ $v->price }}</span>
								
								<a href="/cart/store/{{ $v->id }}"><button type="button" class="btn btn-success">加入购物车</button></a>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>	
	</div>
</div>
					
					 
					


@endsection