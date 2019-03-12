<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
class IndexController extends Controller
{
    public function index()
    {
    	// 统计用户个数
    	$user = Users::all();
    	$usernum = count($user);

    	return view('Admin.Index.index',['title'=>'商城后台首页','usernum'=>$usernum]);
    }

    
}
