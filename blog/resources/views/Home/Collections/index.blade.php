@extends('Home.public.index')

	@section('content') 
		<div class="wishlist-page bg-off-white padding-bottom-90">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive">
							<table class="table cart-table wishlist-table text-center">
								<thead>
									<tr>
										<th class="number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">编号</font></font></th>
										<th class="image"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
										<th class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></th>
										<th class="stock"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存状态</font></font></th>
										<th class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价钱</font></font></th>
										<th class="add-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加到购物车</font></font></th>
										<th class="remove"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">操作</font></font></th>
									</tr>
								</thead>
								<tbody>
								@foreach($collection as $v)
									<tr>
										<td><span class="cart-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $i++ }}</font></font></span></td>
										<td><a href="#" class="cart-pro-image"><img src="/uploads/{{ $v->img }}"></a></td>
										<td><a href="#" class="cart-pro-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->gname }}</font></font></a></td>
										<td><p class="stock in-stock"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					                           @if($v->num < 0)
													<p style="color:red;">缺货</p>
					                           @else
													有现货
					                           @endif 
										</font></font></p></td>
										<td><p class="cart-pro-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ {{ $v->price }}元</font></font></p></td>
										<td><a href="/cart/store/{{ $v->gid }}" class="add-cart-btn button small color-hover"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加到购物车</font></font></a></td>
										<td><a href="Collections/{{ $v->id }}" class="cart-pro-remove" onclick="return confirm('确定要删除吗?')" style="cursor:pointer;"><i class="zmdi zmdi-delete"></i></a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection