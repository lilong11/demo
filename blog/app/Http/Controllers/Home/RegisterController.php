<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function phone()
    {
    	return view('Home.register.phone',['title'=>'手机号注册']);
    }

    public function doPhone(Request $request)
    {
    	dump($request->all());
    }

}
