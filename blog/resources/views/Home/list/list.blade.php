@extends('Home.public.index')
        
        @section('title','购物车')
        @section('content')


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
						<div class="col-sm-3 col-xs-7 pro-show text-right float-right">
							<div class="show-wrap">
								<label>show:</label>
								<select class="show-select">
									<option>9</option>
									<option>16</option>
									<option>32</option>
									<option>ALL</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 short-by text-center">
							<div class="short-by-wrap">
								<label>short by:</label>
								<select class="sort-select">
									<option>Name Ascending</option>
									<option>Name Descending</option>
									<option>Date Ascending</option>
									<option>Date Descending</option>
									<option>Price Ascending</option>
									<option>Price Descending</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tab-content shop-pro-tab-container">
				<div class="tab-pane active" id="grid-view">
					<!-- Single Product -->
					
					<!-- Single Product -->
					 @foreach($goods as $k=>$v)
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
	<!-- !!!!!!!!!!!!!!!!!	 --><button class="pro-act-btn 									btn-text">											<a href="/cart/store/{{ $v->id }}">加入</a></button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">{{ $v->gname }}</a>
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
									<span>(5)</span>
								</div>
							</div>
						</div>
					</div>
					 @endforeach
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Women’s handbag</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 99.99</span>
									<span class="old">145.00</span>
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
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Women’s winter dress</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 45.00</span>
								</div>
								<!-- Product Ratting -->
								<div class="sin-pro-ratting float-right">
									<div class="rattings float-left">
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
									</div>
									<span>(0)</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Full sleev women shirt</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 85.00</span>
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
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 45.00</span>
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
									<span>(5)</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Women’s handbag</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 99.99</span>
									<span class="old">145.00</span>
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
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Women’s winter dress</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 45.00</span>
								</div>
								<!-- Product Ratting -->
								<div class="sin-pro-ratting float-right">
									<div class="rattings float-left">
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
									</div>
									<span>(0)</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Full sleev women shirt</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 85.00</span>
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
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 45.00</span>
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
									<span>(5)</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Women’s handbag</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 99.99</span>
									<span class="old">145.00</span>
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
					<!-- Single Product -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="sin-pro">
							<!-- Product Image -->
							<div class="sin-pro-img-action fix">
								<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
								<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
								<!-- Product Action -->
								<div class="sin-pro-action">
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
									<button class="pro-act-btn btn-text">add to bag</button>
									<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
								</div>
							</div>
							<!-- Product Details -->
							<div class="sin-pro-details fix">
								<a class="sin-pro-title" href="#">Women’s winter dress</a>
								<!-- Product Price -->
								<div class="sin-pro-price float-left">
									<span class="new">$ 45.00</span>
								</div>
								<!-- Product Ratting -->
								<div class="sin-pro-ratting float-right">
									<div class="rattings float-left">
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
										<i class="zmdi zmdi-star-outline"></i>
									</div>
									<span>(0)</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="list-view">
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="./home_public/img/product/7.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="./home_public/img/product/5.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="sin-list-pro fix">
							<!-- Product Image -->
							<div class="sin-list-pro-img float-left">
								<a href="#" class="list-pro-img"><img src="./home_public/img/product/6.jpg" alt="" /></a>
								<span class="pro-label label-new">new</span>
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>
							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">Full sleev women shirt</a>
								<div class="list-pro-price-ratting fix">
									<!-- Product Price -->
									<div class="sin-pro-price list-pro-price float-left">
										<span class="new">$ 45.00</span>
										<span class="old">(145.00)</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting list-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
								<p class="list-pro-availability fix">availability: <span class="in-stock">in stock</span></p>
								<div class="list-pro-overview">
									<h5>overview:</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<button class="list-pro-act-btn btn-text">add to bag</button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									<button class="list-pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="shop-toolbar shop-toolbar-bottom fix">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-3 view-mode text-left">
							<a class="grid active" href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-apps"></i></a>
							<a class="list" href="#list-view" data-toggle="tab"><i class="zmdi zmdi-storage"></i></a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-9 short-by text-right float-right">
							<div class="short-by-wrap">
								<label>short by:</label>
								<select class="sort-select">
									<option>Name Ascending</option>
									<option>Name Descending</option>
									<option>Date Ascending</option>
									<option>Date Descending</option>
									<option>Price Ascending</option>
									<option>Price Descending</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-sm-5 col-xs-12 pagination text-center">
							<ul>
								<li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#" class="active">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

@endsection