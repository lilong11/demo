<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
class OpinionController extends Controller
{
	public function create(){
		if(session('uid')){
		$users = Users::find(session('uid'));

			return view('Home/opinion/create',['users'=>$users]);
		}else{
			return view('Home/register/login');
		}

	}
}
