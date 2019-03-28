@extends('Home.public.index')
        
        @section('title','订单页')
        @section('content')
		<div class="checkout-page bg-off-white padding-bottom-90">
			<div class="container">
				<div class="row">
					
					<!-- Order Details -->
					<div class="col-md-12 col-xs-12">
						<div class="order-details-wrapper">
							<h2>我的订单</h2>

							<div class="order-details fix">
									<ul>
										<li>
											<p class="strong float-left" style="width:200px">订单详情</p>
											<p class="last-child strong float-right" style="width:150px">操作</p>
											<p class="last-child strong float-right" style="width:150px">状态</p>
											<p class="last-child strong float-right" style="width:150px">总金额</p>
											<p class="last-child strong float-right" style="width:150px">收货人</p>
										</li>
									</ul>
							</div>

							
							
								@foreach( $orders as $k1=>$v1)

								@endforeach
								@foreach( $goods as $k1=>$v1)

								@endforeach
							@foreach($orderdetail as $k=>$v)
							<div class="order-details fix">
									<ul>
										<li>
											
											
											<p class=" strong float-left" style="width:200px">{{ $v[0]->created_at }}</p>
											<p class=" strong float-left" style="width:200px">订单号:{{ $orders[$k]->oid }}</p>
											
										</li>
										<li>
											<p class="last-child float-right" style="width:150px">
										        @switch($orders[$k]->status)
	                                                @case(0)
	                                                        <a href="/address/pay/"><button type="button" class="btn btn-danger">去支付</button></a>

	                                                @break
	                                                @case(1)
	                                                        <a href="/orders/edit/{{ $orders[$k]->oid }}"><button type="button" class="btn btn-danger">取消订单</button></a>
	                                                @break
	                                                @case(2)
	                                                        <a href="/orders/show/{{ $orders[$k]->oid }}"><button type="button" class="btn btn-success">确认收货</button></a>
	                                                @break
	                                                @case(3)
	                                                        <a href="/orders/destroy/{{ $orders[$k]->oid }}"><button type="button" class="btn btn-danger">删除订单</button></a>
	                                                @break
	                                                @case(4)
	                                                        <a href="/orders/destroy/{{ $orders[$k]->oid }}"><button type="button" class="btn btn-danger">删除订单</button></a>
	                                                @break
	                                            @endswitch 
											</p>
											<p class="last-child float-right" style="width:150px">
												@switch($orders[$k]->status)
	                                                @case(0)
	                                                        等待支付
	                                                @break
	                                                @case(1)
	                                                        等待发货
	                                                @break
	                                                @case(2)
	                                                        商品运输中
	                                                @break
	                                                @case(3)
	                                                        订单已完成
	                                                @break
	                                                @case(4)
	                                                        订单已取消
	                                                @break
	                                            @endswitch 
											</p>
											<p class="last-child float-right" style="width:150px">{{ $orders[$k]->oprice }}</p>
											<p class="last-child float-right" style="width:150px">{{ $oname[$k]->name }}</p>
										</li>
										
									</ul>
									

									<ul>
										@foreach($goods[$k] as $k2=>$v2)
										<li>
											
												<p class="float-left" style="width:150px"><img src="../uploads/{{ $v2->pic }}" alt="" style="width:100px" ></p>
												<p class="float-left" style="width:150px">{{ $v2->gname }}</p>
												<p class="float-left" style="width:150px">{{ $v[$k2]->gnum }}件</p>
										</li>
										@endforeach
										
									</ul>
									
							</div>
							@endforeach
						</div>
					</div>
<!-- ====================订单广告开始====================== -->
					<div class="col-md-12 col-xs-12">
						<div class="order-details fix">


							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
							  </ol>
								
							  <div class="carousel-inner" role="listbox" style="height:150px">
							    <div class="item active">
							      <img src="../uploads/adver/1.jpeg" alt="..." style="width:100%;height:100%">
							      
							    </div>

							    @foreach($adver as $k3=>$v3)
								
							    <div class="item">
							      <img src="../uploads/{{ $v3->apic }}" alt="..." style="width:100%;height:100%">
							      <div class="carousel-caption">

							      </div>
							    </div>
							    @endforeach

							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>


						</div>
					</div>
<!-- ====================订单广告结束====================== -->

				</div>
			</div>
		</div>

@endsection
