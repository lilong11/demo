@extends('Home.public.index')
        
        @section('title','购物车')
        @section('content')

<!-- Cart Page
============================================ -->
<div class="cart-page bg-off-white padding-bottom-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive">
					<table class="table cart-table text-center">
						<thead>
							<tr>
								<th class="number">ID</th>
								<th class="image">图片</th>
								<th class="name">商品名称</th>
								<th class="qty">数量</th>
								<th class="price">单价</th>
								<th class="total">小计</th>
								<th class="remove">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="cart-number">1</span></td>
								<td><a href="#" class="cart-pro-image"><img src="img/product/4.jpg" alt="" /></a></td>
								<td><a href="#" class="cart-pro-title">2</a></td>
								<td><div class="cart-pro-qunantuty">
									4
								</div></td>
								<td><p class="cart-pro-price">3</p></td>
								<td><p class="cart-price-total">4</p></td>
								<td><button class="cart-pro-remove"><i class="zmdi zmdi-delete"></i></button></td>
							</tr>
							<tr>
								<td><span class="cart-number">5</span></td>
								<td><a href="#" class="cart-pro-image"><img src="img/product/1.jpg" alt="" /></a></td>
								<td><a href="#" class="cart-pro-title">Full sleev women shirt</a></td>
								<td><div class="cart-pro-qunantuty">
									<select>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</div></td>
								<td><p class="cart-pro-price">$85.99</p></td>
								<td><p class="cart-price-total">$85.99</p></td>
								<td><button class="cart-pro-remove"><i class="zmdi zmdi-delete"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col-md-8 col-xs-12 cart-actions cart-button-cuppon">
						<div class="cart-action float-left">
							<a href="#" class="button color-hover">继续购物</a>
							<button class="button color-hover">update shopping bag</button>
						</div>
						<div class="cuppon-wrap float-right">
							<h4>DISCOUNT CODES</h4>
							<p>Enter your coupon code if you have</p>
							<form action="#" class="cuppon-form">
								<input type="text" />
								<button class="button color-hover">apply coupon</button>
							</form>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 cart-checkout-process text-right">
						<div class="wrap">
							<p><span>数量</span><span>1</span></p>
							<h4><span>总价</span><span>2</span></h4>
							<button class="button color-hover">去结算</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Brand Area
============================================ -->


@endsection