<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/home_public/img/favicon.ico">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- css  -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/bootstrap.min.css">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/material-design-iconic-font.min.css">
	<!-- Mean Menu CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/meanmenu.min.css">
	<!-- Owl Carousel CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/owl.carousel.css">
	<!-- Nivo Slider CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/nivo-slider.css">
	<!-- Price Slider CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/jquery-ui.min.css">
	<!-- Magnific Popup CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/magnific-popup.css">
	<!-- Animate CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/animate.min.css">
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/style.css">
	<!-- Default Color CSS
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/color/color-one.css">
	<!-- Responsive CSS 
	============================================ -->
	<link rel="stylesheet" href="/home_public/css/responsive.css">
</head>
<body>
<div class="sin-list-pro fix" style="width:850px">
	<!-- Product Image -->
	<div class="sin-list-pro-img float-left">

		<a href="#" class="list-pro-img"><img src="uploads/userinfo/feiGOvvOQRoKzfaULk2N7xq12mAinVO1RgIsVdeG.jpeg" alt="头像"></a> 
		<a href="#pro-quick-view" class="list-pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
	</div>
	<div class="list-pro-details fix">
		<a class="list-pro-title" href="#">用户名详情:</a> 
		<p class="list-pro-availability">用户名: <span class="in-stock"> {{$user->uname}} </span></p> 
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
		<p class="list-pro-availability fix">城市: <span class="in-stock"> {{$userInfo->city or '还没有填'}}  </span></p> 
		<div class="list-pro-overview">
			<h5>个新签名:</h5>
			<p>{{$userInfo->sign or '这个人很懒,什么也没留下'}}</p>
		</div>
		<!-- Product Action -->
		<div class="list-pro-action">
			<a class="list-pro-act-btn btn-text" href="/infoEdit/74" style="cursor:pointer;">修改信息</a>
			<a class="list-pro-act-btn btn-icon" href="/password" style="cursor:pointer;">修改密码</a> 
		</div>
	</div>
</div>
</body>
</html>