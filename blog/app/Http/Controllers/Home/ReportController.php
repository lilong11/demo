<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
class ReportController extends Controller
{
    public  function create(){
    	// dump(session('uid'));
    	$users = Users::find(session('uid'));
    	// dd($users);
    	

    	return view('Home/report/create',['users'=>$users]);
    	// dump('一哈哈哈');
    }
}
