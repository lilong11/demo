<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Usersinfos;

class UserinfoController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = Users::find($id);//主键
       $userInfo = $user->userinfo;  

       return view('Admin.Userinfo.userinfo',['title'=>'用户详情','user'=>$user,'userInfo'=>$userInfo]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $userinfo = Usersinfos::find($id);
       // dd($userinfo);
        return view('Admin.Userinfo.edit',['userinfo'=>$userinfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //接收文件上传对象
        $users = Usersinfos::find($id);
        if(!empty($request->img)){
            $file = $request->file('img');
            $file_name = $file->store('userinfo'); 
            $users->img = $file_name;
            $users->save();
        }  
        
        $users->city = $request['city'];
        $users->sex = $request['sex'];
        $users->sign = $request['sign'];
        $users->age = $request['age'];
        $bool = $users->save();  
        if($bool){
            echo '<script>alert("修改成功.");location="/user"</script>';
        }else{
            echo '<script>alert("修改失败!");location="/user"</script>';
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
