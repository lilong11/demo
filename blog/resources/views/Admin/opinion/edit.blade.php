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
<form  action="/admin/opinion/{{$opinion->id}}" method="post"  style="width:600px;margin:100px auto;" >
{{ csrf_field() }}
{{ method_field('PUT')}}
	<div class="center-block">
	<div class="form-group ">
		<h4>姓名:</h4>	<input value="{{ $opinion->name }}" type="text" name="name" class="form-control "  id="text" placeholder="请填写真实姓名">
	</div>	
	<div class="form-group ">
		<h4>手机号:</h4>	<input value="{{ $opinion->phone }}" type="text" name="phone" class="form-control "  id="text" placeholder="请填写正确11位手机号">
	</div>
	<div class="form-group ">
		<label for="text"><h4>意见内容</h4></label>
	
		<textarea name="content" class="form-control" rows="5">{{ $opinion->content }}</textarea>
	</div>

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