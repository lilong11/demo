@extends('Home.user_public.index')

	@section('content') 
		<div class="blog-details-page blog-details-sidebar bg-off-white padding-bottom-90">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-xs-12 blog-container">
						<div class="sin-list-pro fix" style="width:850px">
						
							<!-- 头像上传 -->
							<div class="sin-list-pro-img float-left">
								<form action="/img" method="post" enctype="multipart/form-data">
			                        {{ csrf_field() }}
	                                <label> 头像上传 </label>
	                                 <input type="file" name="img">
	                                 <input type="submit" value="上传头像" />
								</form>
								<a href="#" class="list-pro-img"><img src="/uploads/{{ $userInfo->img }}" alt="头像"></a> 
								<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							</div>



							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">用户名:admin</a> 
								<p class="list-pro-availability">用户名: <span class="in-stock"> {{ $users->uname }} </span></p> 
								<p class="list-pro-availability fix">性别: 
								<span class="in-stock">                         
										@switch($userInfo -> sex)
			                           		@case(0)
			                           			女
			                           		@break
			                           		@case(1)
			                           			男
			                           		@break
			                           		@case(2)
			                           			保密
			                           		@break
			                           	@endswitch 
			                           	 </span></p> 
								<p class="list-pro-availability fix">城市: <span class="in-stock"> {{ $userInfo->city }} </span></p> 
								<div class="list-pro-overview">
									<h5>个新签名:</h5>
									<p>{{ $userInfo->sign }}</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<a class="list-pro-act-btn btn-text" href="/infoEdit/{{session('uid')}}" style="cursor:pointer;">修改信息</a>
									<a class="list-pro-act-btn btn-icon" href="/password" style="cursor:pointer;">修改密码</a> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	@endsection