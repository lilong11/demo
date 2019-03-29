@extends('Home.public.index')
	@section('content')
			<div class="comment-form fix" >
				<h2>问题提交</h2>
				<form action="/doIssues" method="post">
                    {{ csrf_field() }}
					<div class="input-box transparent"><input type="text" name="title" placeholder="问题的标题"></div>
					<div class="input-box submit-box width-full"><input class="button large" type="submit" value="提交问题"></div>
				</form>
			</div>
		</div>

	@endsection






