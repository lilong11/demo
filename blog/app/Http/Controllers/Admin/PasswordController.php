<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class PasswordController extends Controller
{
	// 修改密码
    public function edit($id)
    { 
        return view('Admin.User.password',['title'=>'用户密码修改','id'=>$id]);
    }    

    // 修改密码处理
    public function doPassword(Request $request,$id)
    {

        if($request['password'] != $request['repasswords']){ 
			echo '<script>alert("新密码俩次密码不一致!");location="/aPassword/{{$id}}"</script>';exit; 
        }   
    	$users = Users::find($id);   
    	$users->password = Hash::make($request->input('password',''));
    	$bool = $users->save();
    	if($bool){
			echo '<script>alert("密码已经更新");location="/user"</script>';exit; 
    	}else{
			echo '<script>alert("密码修改失败!");location="/user"</script>';exit; 
    	}


    }


}
