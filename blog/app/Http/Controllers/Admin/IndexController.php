<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Illuminate\Support\Facades\Auth; 
use DB;  
use App\Models\Background;

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
        // 判断是有用户存在
        if (Auth::attempt(['uname' => $uname, 'password' => $password])) { 
                

            $data = DB::table('users')->where('uname',$uname)->get();
            // 循环用户列表
            foreach($data as $k){
                $status = $k->status; 
                $grade = $k->grade;
            }

            if($grade != 2){
             echo '<script>alert("抱歉您的权限不够");location="/login"</script>'; exit;
            }

            if($status != 0){
             echo '<script>alert("您的用户疑似黑号,已禁用,请联系超级管理员");location="/login"</script>'; exit;
            }



            session(['admin'=>$uname]);
             echo '<script>alert("登入成功");location="/admin"</script>';
        }else{
            $request->flashOnly('uname');
             echo '<script>alert("登入失败!密码错误");location="/login"</script>';
        } 

    }
    // 后台用户退出
    public function exit()
    {
        session()->forget('admin');
        return view('Admin.Index.login',['title'=>'商城后台登入']);exit;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $user = new Users;
      // $grade = 2;
      // 统计用户个数 
      $vip =  count($user->where([ 'grade' => 1 ])->get());
      $common =  count($user->where([ 'grade' => 0 ])->get());
     $root =  count($user->where([ 'grade' => 2 ])->get()); 
     // dd($root);

        return view('Admin.Index.index',['title'=>'商城后台','vip'=>$vip,'common'=>$common,'$root'=>$root]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    { 
 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    { 
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
