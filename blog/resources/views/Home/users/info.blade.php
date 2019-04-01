@extends('Home.user_public.index')

	@section('content') 
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
		<div class="blog-details-page blog-details-sidebar bg-off-white padding-bottom-90">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-xs-12 blog-container">
						<div class="sin-list-pro fix" style="width:850px">
						
							<!-- 头像上传 -->
							<div class="sin-list-pro-img float-left">
								<label for="file"><img id="profile" src="/uploads/{{ $userInfo->img }}" alt="点击我上传头像" style="width:270px;height:270px;cursor:pointer;"> </label>
								<form  action="/head" method="post" enctype="multipart/form-data"> 
									{{ csrf_field() }}
								    
									<input type="file" name="profile" id="file" style="display: none;"  onchange="uploadimg()"/>
								    <input type="submit" class="list-pro-act-btn btn-text" value="上传头像" />
								</form>
							</div>

							<div class="list-pro-details fix">
								<a class="list-pro-title" href="#">用户详情:</a> 
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
								<p class="list-pro-availability fix">城市: <span class="in-stock"> {{ $userInfo->city or '您还没留下什么' }} </span></p> 
								<div class="list-pro-overview">
									<h5>个新签名:</h5>
									<p>{{ $userInfo->sign }}</p>
								</div>
								<!-- Product Action -->
								<div class="list-pro-action">
									<a class="list-pro-act-btn btn-text" href="/infoEdit/{{session('uid')}}" style="cursor:pointer;text-align: center;">修改信息</a>
									<a class="list-pro-act-btn btn-icon" href="/password" style="cursor:pointer;">修改密码</a> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	@endsection