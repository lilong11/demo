<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvestorController extends Controller
{
    public function create(){
    	// dd('嘚嘚');
    	return  view('Home/investor/create');
    }
}
