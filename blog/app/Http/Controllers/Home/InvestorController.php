<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvestorController extends Controller
{
    public function create(Request $request){
    	// dd('嘚嘚');
    	if(session('uid')){
    		return  view('Home/investor/create');
    		
    	}else{
    		return view('Home.register.login',['title'=>'账号登入']);
    	}
    }
}
