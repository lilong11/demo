@extends('Home.public.index')
@section('content')



<!-- {{--<form  action="/admin/investor" method="post"  style="width:600px;margin:100px auto;" >--}} -->

<!-- {{--自己后台的form表单开始--}} -->
<form  action="/admin/investor" method="post"  >
{{ csrf_field() }}
	<div class="center-block">
	<div class="form-group ">
		<h4>姓名:</h4>	<input type="text" name="name" class="form-control "  id="text" placeholder="请填写真实姓名">
	</div>	

	<!-- 性别 -->
	<div class="form-group ">
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

	<div class="form-group ">
		<input type="hidden" name="hidden" value="hidden">
	</div>
		<button type="submit " class="btn btn-info form-control">提交</button>
	</div>
</form>
</body>
</html>
{{--自己后台的form表单结束--}}



@endsection