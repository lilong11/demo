@extends('Home.public.index')
@section('content')



<!-- {{--<form  action="/admin/investor" method="post"  style="width:600px;margin:100px auto;" >--}} -->

<!-- {{--自己后台的form表单开始--}} -->
<form  action="/admin/report" method="post"  enctype="multipart/form-data">
{{ csrf_field() }}
	<div class="center-block">
	<div class="form-group ">
			<h4>姓名:</h4>
			<input value="{{ $users->uname }}" type="text" name="name" class="form-control "  id="text" placeholder="请填写真实姓名">
	</div>

	<div class="form-group ">
			<h4>手机号</h4>
			<input value="{{ $users->tel }}" type="text" name="phone" class="form-control "  id="text" placeholder="请填写正确11位手机号">
	</div>	
	<div class="form-group ">
			<h4>邮箱:</h4>
			<input value="" type="text" name="email" class="form-control "  id="text" placeholder="请填写正确邮箱号">
	</div>	
	<div class="form-group ">
			<h4>添加图片:</h4>
			<input type="file" name="pic" class="form-control "  id="text">
	</div>

	<div class="form-group ">
		<input type="hidden" name="hidden" value="hidden">
	</div>	

	
	<div class="form-group ">
		<h4>说明:</h4>
		<textarea name="content" class="form-control "></textarea>
	</div>
	
		<button type="submit " class="btn btn-info form-control">提交</button>
	</div>
</form>
</body>
</html>
{{--自己后台的form表单结束--}}



@endsection