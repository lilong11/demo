@extends('Admin/layout/index');
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/boot/css/bootstrap.min.css">
	<script type="text/javascript" src="/boot/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/boot/js/bootstrap.min.js"></script>
</head>
<body>
<form  action="/adv/{{ $adv->id }}/edit" method="post" enctype="multipart/form-data" style="width:600px;margin:100px auto;" >
{{ csrf_field() }}
{{ method_field('PUT')}}
	<div class="center-block">
	<!-- <div class="form-group ">
		<label for="text"><h3>广告标题</h3></label>
		<input type="text" name="text" class="form-control "  id="text" placeholder="请填写内容">
	</div> -->

	<div class="form-group">
		<label for="image"><h3>选择图片</h3></label>
		<input type="file" name="guanggao" id="image" value="{{ $adv->guangao }}">
	</div>
	
	<!-- <input class=" form-conrtol" type="button" name="" value="" placeholder="">提交 -->
	<button type="submit " class="btn btn-info form-control">提交</button>
	</div>
</form>
</body>
</html>

@endsection