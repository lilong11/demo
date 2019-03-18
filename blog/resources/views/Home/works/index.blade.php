@extends('Home.public.index')

    @section('content')
		<!-- 文章右边的内容 -->
		<div class="col-md-3 col-xs-12 sidebar-container float-right">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="sin-sidebar search-sidebar">
						<div class="search-sidebar-form">
							<form action="#">
								<input type="text" placeholder="Search" />
								<button class="search-submit"><i class="zmdi zmdi-search"></i></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="sin-sidebar category-sidebar">
						<h3 class="sidebar-title">文章</h3>
						<div class="sidebar-wrapper fix">
						<!-- treeview start -->
							<ul>
								@foreach($data as $k )
								<li><a href="#">{{ $k -> title }}</a></li> 
								@endforeach
							</ul>
						</div>
					</div>
				</div>  
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="sin-sidebar category-sidebar">
						<h3 class="sidebar-title">问题</h3>
						<div class="sidebar-wrapper fix">
						<!-- treeview start -->
							<ul>
								@foreach($datas as $k )
								<li><a href="#">{{ $k -> title }}</a></li> 
								@endforeach
							</ul>
						</div>
					</div>
				</div>  
			</div>
		</div>
		<!-- 文章左边的内容 -->
		<div class="col-md-9 col-xs-12 blog-container">
			<!-- Single blog -->
			<div class="sin-blog fix">
				<!-- 左边的内容 -->
				<div class="comment-form fix">
					<div class="order-details-wrapper">
						<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">你的订单</font></font></h2>
						<div class="order-details fix">
							<form action="#">
								<ul>
									<li><p class="strong float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品</font></font></p><p class="last-child strong float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></p></li>
									<li><p class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor坐在amet x1</font></font></p><p class="last-child float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 104.99</font></font></p></li>
									<li><p class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor T恤x1 </font></font></p><p class="last-child float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 85.99</font></font></p></li>
									<li><p class="strong float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车小计</font></font></p><p class="last-child strong float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 190.98</font></font></p></li>
									<li><p class="strong float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输</font></font></p><p class="last-child float-right">
										<input type="radio" name="order-shipping" id="flat"><label for="flat"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统一费率$ 7.00</font></font></label><br>
										<input type="radio" name="order-shipping" id="free"><label for="free"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">免费送货</font></font></label>
									</p></li>
									<li><p class="strong float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">合计订单</font></font></p><p class="last-child strong float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 190.98</font></font></p><button class="button large color-hover float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下订单</font></font></button></li>
								</ul>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    @endsection