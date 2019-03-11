<?php

namespace App\Http\Controllers\Admin\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	// dump('后台首页');
    	return view('Admin.Index.index');
    }
}
