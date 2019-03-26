<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\works;

class ShowController extends Controller
{
    //用户是否显示
    public function users($status,$id)
    {	
        //判断用户是否登入了
        if(empty(session('admin'))){
            return view('Admin.Index.login');exit;
        }
    	// dump($id);
    	$users = Users::find($id);
        $users->status = $status; 
        $bool = $users->save();    
    	if($bool){
    		return redirect('/user');
    	}else{
    		echo '<script>alert("禁用失败!");location="/user"</script>'; exit;
    	} 
    }

    //公告.文章是否显示
    public function works($status,$id)
    {   
        // dump($id);
        $works = works::find($id);
        $works->status = $status; 
        $bool = $works->save();    
        if($bool){
            return redirect('/works');
        }else{
            echo '<script>alert("禁用失败!");location="/works"</script>'; exit;
        } 
    }


}
