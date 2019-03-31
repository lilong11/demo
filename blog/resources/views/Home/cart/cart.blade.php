@extends('Home.public.index')
        
        @section('title','购物车')
        @section('content')

<!-- Cart Page
============================================ -->
@if(empty($arr))
	<div class="cart-page bg-off-white padding-bottom-90">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive">
						<table class="table cart-table text-center">
							<thead>
								<tr>
									<th class="name">商品名称</th>
									<th class="image">图片</th>
									<th class="image">尺寸</th>
									<th class="price">单价</th>
									<th class="num">数量</th>
									<th class="total">小计</th>
									<th class="remove">操作</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@else
<div class="cart-page bg-off-white padding-bottom-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive">
					<table class="table cart-table text-center">
						<thead>
							<tr>
								
								<th class="name">商品名称</th>
								<th class="image">图片</th>
								<th class="image">尺寸</th>
								<th class="price">单价</th>
								<th class="num">数量</th>
								<th class="total">小计</th>
								<th class="remove">操作</th>
							</tr>
						</thead>
						<tbody>
							@foreach($arr1 as $k1=>$v1)
								
							@endforeach

							 @foreach($arr as $k=>$v)
							 
							<tr>
								
								<td>{{ $v->gname }}</td>
								<td><img src="uploads/{{ $v->pic }}" style="width:150px" alt="" /></td>
								<td>{{ $size[$k]->gsizename }}</td>
								<td><p class="cart-pro-price">{{ $v->price }} 元</p></td>
								<td><div class="cart-pro-qunantuty">
								<a href="/cart/jian/{{ $v->id }}/{{ $size[$k]->id }}/{{ $arr1[$k] }}"><button>-</button></a>
									{{ $arr1[$k] }}
								<a href="/cart/jia/{{ $v->id }}/{{ $size[$k]->id }}/{{ $arr1[$k] }}"><button>+</button></a>


								</div></td>
								<td><p class="cart-price-total">{{ $v->price*$arr1[$k] }} 元</p></td>
								<td><button class="cart-pro-remove" >
									<a onclick="return confirm('确定要删除吗?')" href="/cart/destroy/{{ $v->id }}/{{ $size[$k]->id }}"><button type="button" class="btn btn-danger">删除</button></a>
									<!-- <i class="zmdi zmdi-delete"></i> -->
								</button></td>
							</tr>

								
							@endforeach

							
						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col-md-8 col-xs-12 cart-actions cart-button-cuppon">
						<div class="cart-action float-left">
							<a href="/" class="button color-hover">返回继续购物</a>

						</div>
						
					</div>
					<div class="col-md-4 col-xs-12 cart-checkout-process ">
						<div class="wrap">
							
							<p>
								<span style="width:200px">总数量:</span>
								<span style="width:100px">{{ $num }} 件</span></p>
							
							<h4>
								<span style="width:200px">总价格:</span>
								<span style="width:100px">{{ $total }} 元</span></h4>

							<a href="/address"><button type="button" class="btn btn-success  btn-block">去结算</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!-- Brand Area
============================================ -->


@endsection