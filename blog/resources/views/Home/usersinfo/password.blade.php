@extends('Home.user_public.index')

	@section('content') 
		<div class="comment-form fix">
			<h2>密码修改</h2>
			<form action="/doPassword/{{session('uid')}}" method="post"> 
              {{ csrf_field() }} 
				<div class="input-box transparent"><input type="password" name="password" placeholder="旧密码"></div> 
				<div class="input-box transparent"><input type="password" name="repassword" placeholder="新密码"></div> 
				<div class="input-box transparent"><input type="password" name="repasswords" placeholder="确认密码"></div> 
				<div class="input-box submit-box width-full"><input class="button large" type="submit" value="修改"></div>
			</form>
		</div>
	@endsection