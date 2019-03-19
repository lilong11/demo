@extends('Home.user_public.index')

	@section('content') 
		<div class="comment-form fix">
			<h2>LEAVE A COMMENT</h2>
			<form action="#">
				<div class="input-box transparent"><input type="text" placeholder="Name*"></div>
				<div class="input-box transparent"><input type="text" placeholder="Email*"></div>
				<div class="input-box transparent"><input type="text" placeholder="Subject"></div>
				<div class="input-box transparent"><textarea name="message" placeholder="Message"></textarea></div>
				<div class="input-box submit-box width-full"><input class="button large" type="submit" value="send"></div>
			</form>
		</div>
	@endsection