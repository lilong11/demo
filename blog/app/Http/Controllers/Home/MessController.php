<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class MessController extends Controller
{
	public function create(){
		// {{--dump('我是前台添加留言部分');--}}	{{-- --}}是view视图里面代替<!-- -->用的
		$users = Users::find(session('uid'));
	    	if(session('uid')){
	    		

	    		return view('Home/mess/create',['users'=>$users]);
	    		
	    	}else{
	    		return view('Home.register.login',['title'=>'账号登入']);
	    	}
	}
}
