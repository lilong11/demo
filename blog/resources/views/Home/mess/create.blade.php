@extends('Home.public.index')
@section('content')



<!-- {{--<form  action="/admin/investor" method="post"  style="width:600px;margin:100px auto;" >--}} -->

<!-- {{--自己后台的form表单开始--}} -->
<form  action="/admin/mess" method="post"  >
{{ csrf_field() }}
	<div class="center-block">
	<div class="form-group ">
		<h4>姓名:</h4>	<input value = '{{ $users->uname }}' type="text" name="name" class="form-control "  id="text" placeholder="请填写真实姓名">
	</div>

	<div class="form-group ">
		<h4>手机号:</h4>	<input value = '{{ $users->tel }}' type="text" name="phone" class="form-control "  id="text" placeholder="请填写正确11位手机号">
	</div>

	<div class="form-group ">
		<input type="hidden" name="hidden" value="text">
	</div>	

	<div class="form-group ">
		<h4>留言内容:</h4>
		<textarea name="mess" class="form-control "></textarea>
	</div>
		<button type="submit " class="btn btn-info form-control">提交</button>
	</div>
</form>
</body>
</html>
{{--自己后台的form表单结束--}}



@endsection