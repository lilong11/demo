@extends('Admin/layout/index');
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<form  action="/mess" method="post" enctype="multipart/form-data" style="width:600px;margin:100px auto;" >
{{ csrf_field() }}
	<div class="center-block">
	<div class="form-group ">
		<label for="text"><h3>留言内容</h3></label>
		<!-- <input type="text" name="text" class="form-control "  id="text" placeholder="请填写内容"> -->
		<textarea class="form-control" rows="5"></textarea>
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