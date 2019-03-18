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
								<th class="number">#</th>
								<th class="image">image</th>
								<th class="name">product name</th>
								<th class="qty">quantity</th>
								<th class="price">price</th>
								<th class="total">totle</th>
								<th class="remove">remove</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="cart-number">1</span></td>
								<td><a href="#" class="cart-pro-image"><img src="img/product/4.jpg" alt="" /></a></td>
								<td><a href="#" class="cart-pro-title">Women’s winter dress</a></td>
								<td><div class="cart-pro-qunantuty">
									<select>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</div></td>
								<td><p class="cart-pro-price">$104.99</p></td>
								<td><p class="cart-price-total">$104.99</p></td>
								<td><button class="cart-pro-remove"><i class="zmdi zmdi-delete"></i></button></td>
							</tr>
							<tr>
								<td><span class="cart-number">2</span></td>
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
							<a href="#" class="button color-hover">continiue shopping</a>
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
							<p><span>Subtotal</span><span>$190.98</span></p>
							<h4><span>Grand total</span><span>$190.98</span></h4>
							<button class="button color-hover">process to checkout</button>
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