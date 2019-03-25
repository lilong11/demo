@extends('Admin/layout/index')
@section('content')
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
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/Admin_public/css/font.css">
        <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="../Admin_public/css/swiper.min.css">
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
        <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>

        <link rel="stylesheet" type="text/css" href="/boot/css/bootstrap.min.css">
	<script type="text/javascript" src="/boot/js/jquery.min.js"></script>
	<script type="text/javascript" src="/boot/js/bootstrap.min.js"></script>
		<form  action="/adv" method="post" enctype="multipart/form-data" style="width:600px;margin:100px auto;" >
		{{ csrf_field() }}
			<div class="center-block">
			<!-- <div class="form-group ">
				<label for="text"><h3>广告标题</h3></label>
				<input type="text" name="text" class="form-control "  id="text" placeholder="请填写内容">
			</div> -->

			<div class="form-group">
				<label for="image"><h3>选择图片</h3></label>
				<input type="file" name="guanggao" id="image">
			</div>
			<div class="text text-info">
				少时诵诗书
			</div>
			
			<!-- <input class=" form-conrtol" type="button" name="" value="" placeholder="">提交 -->
			<button type="submit " class="btn btn-info form-control">提交</button>
			</div>
		</form>
	@endsection