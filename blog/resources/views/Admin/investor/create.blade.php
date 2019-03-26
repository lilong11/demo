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
<form  action="/admin/investor" method="post"  style="width:600px;margin:100px auto;" >
{{ csrf_field() }}
	<div class="center-block">
	<div class="form-group ">
		<h4>姓名:</h4>	<input type="text" name="name" class="form-control "  id="text" placeholder="请填写真实姓名">
	</div>	

	<!-- 性别 -->
	<div class="form-group ">
<!-- 		<h4>姓名:</h4><h4><input value="0" type="radio" name="sex"  id="text" >女
				<input value="1" type="radio" name="sex"  id="text" >男
				<input value="2" type="radio" name="sex"  id="text" >其他
				</h4> -->
		<h4>性别:</h4>
		<label class="radio-inline">
		  	<input type="radio" name="sex" id="inlineRadio1" value="0">女
		</label>
		<label class="radio-inline">
			<input type="radio" name="sex" id="inlineRadio2" value="1">男
		</label>
		<label class="radio-inline">
		 	<input type="radio" name="sex" id="inlineRadio3" value="2">保密
		</label>
	</div>

	

	<div class="form-group ">
		<h4>手机号:</h4>	<input type="text" name="phone" class="form-control "  id="text" placeholder="请填写正确11位手机号">
	</div>

	<div class="form-group ">
		<h4>邮箱:</h4>	<input type="text" name="email" class="form-control "  id="text" placeholder="请填写正确邮箱格式">
	</div>
<!-- 	<div class="form-group ">
		<label for="text"><h4>意见内容</h4></label>
	
		<textarea name="content" class="form-control" rows="5"></textarea>
	</div> -->

	<!-- <div class="form-group">
		<label for="image"><h3>选择图片</h3></label>
		<input type="file" name="guanggao" id="image">
	</div> -->
	
	<!-- <input class=" form-conrtol" type="button" name="" value="" placeholder="">提交 -->
	<button type="submit " class="btn btn-info form-control">提交</button>
	</div>
</form>
</body>
</html>

@endsection