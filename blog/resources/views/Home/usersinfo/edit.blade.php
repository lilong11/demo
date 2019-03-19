@extends('Home.user_public.index')

	@section('content') 
		<div class="comment-form fix">
			<h2>资料修改</h2>
			<form action="/infoUpdate/{{ $data -> id}}" method="post"> 
              {{ csrf_field() }}
				<div class="input-box transparent">
								<select name="sex">
                                  <option value="0">女</option>
                                  <option value="1">男</option>
                                  <option value="2" selected = "selected">保密</option>
                                </select>
                                </div> 
				<div class="input-box transparent"><input type="text" name="city" value="{{$data->city}}"></div>
				<div class="input-box transparent"><textarea name="sign" placeholder="这个人很懒,什么都没留下">{{$data->sign or '这个人很懒,什么都没留下'}}</textarea></div>
				<div class="input-box submit-box width-full"><input class="button large" type="submit" value="修改"></div>
			</form>
		</div>
	@endsection