@extends('Admin/layout/index');
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	<!-- 继承样式开始 -->
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
            <link rel="stylesheet" href="/Admin_public/css/font.css">
            <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
            <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
            <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
            <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
            <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script> 
	<!-- 样式结束 -->

	<link rel="stylesheet" type="text/css" href="/boot/css/bootstrap.min.css">
	<script type="text/javascript" src="/boot/js/jquery.min.js"></script>
	<script type="text/javascript" src="/boot/js/bootstrap.min.js"></script>
</head>
<body>
<!-- 添加不能空的提示信息开始 -->
	@if ($errors->any())
	    <!-- <div class=" layui-btn layui-btn-danger"> -->
	    <div class="alert alert-info " style="color:red;text-align:center;">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
<!-- 添加不能空的提示信息结束 -->
<form  action="/admin/report" method="post" enctype="multipart/form-data" style="width:600px;margin:100px auto;" >
		{{ csrf_field() }}
			<div class="center-block">
			<!-- 填写姓名 -->
			<div class="form-group ">
				<label for="text"><h3>姓名</h3></label>
				<input value="{{ old('name') }}" type="text" name="name" class="form-control "  id="text" placeholder="请填写真实姓名">
			</div>	
			<!-- 填写手机号 -->
			<div class="form-group ">
				<label for="text"><h3>联系方式</h3></label>
				<input value="{{ old('phone') }}"  type="text" name="phone" class="form-control "  id="text" placeholder="请填写正确手机号">
			</div>	
			<!-- 填写邮箱 -->
			<div class="form-group ">
				<label for="text"><h3>邮箱</h3></label>
				<input value="{{ old('email') }}"  type="text" name="email" class="form-control "  id="text" placeholder="请填写正确邮箱">
			</div>
			<!-- 添加举报图片 -->
			<div class="form-group">
				<label for="image"><h3>添加图片</h3></label>
				<input   type="file" name="pic" id="image">
			</div>

			<div class="form-group ">
				<label for="text"><h3>说明</h3></label>
				<!-- <input type="text" name="email" class="form-control "  id="text" placeholder="请填写正确手机号"> -->
				<textarea name="content" class="form-control ">{{ old('name') }} </textarea>
			</div>
			
			<!-- <input class=" form-conrtol" type="button" name="" value="" placeholder="">提交 -->
			<button type="submit " class="btn btn-info form-control">提交</button>
			</div>
</form>
</body>
</html>

@endsection