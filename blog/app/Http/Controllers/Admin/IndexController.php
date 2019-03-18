<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function login()
    {
    	return view('Admin.Index.login',['title'=>'商城后台登入']);
    }

    public function doLogin(Request $request)
    {
        $uname = $request['uname'];
        $password = $request['password']; 
         // dd($uname);
        if (Auth::attempt(['uname' => $uname, 'password' => $password])) { 
            session(['admin'=>$uname]);
            return redirect('admin')->with('success','登入成功');
        }else{
            return redirect('login')->with('errors','登入失败');
        }
    	
    }

    public function index()
    {
        if(empty(session('admin'))){
            return redirect('login');exit;
        }
    	// 统计用户个数
    	// $user = Users::all();
    	// $usernum = count($user); 
        $admin = session('admin');
        // session()->forget('admin');
    	return view('Admin.Index.index',['title'=>'商城后台首页']);
    }

    

}
