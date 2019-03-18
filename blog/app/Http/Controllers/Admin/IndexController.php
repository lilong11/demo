<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Illuminate\Support\Facades\Auth; 
use DB;  

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

        // $data = DB::table('users')->where('uname',$uname)->get(); 
        // dump($data);exit;
        // if($data['grade'] != 2){
        //     echo '权限不够';exit;
        // }

        if (Auth::attempt(['uname' => $uname, 'password' => $password])) { 
            
            session(['admin'=>$uname]);
             echo '<script>alert("登入成功");location="/admin"</script>';
        }else{
            $request->flashOnly('uname');
             echo '<script>alert("登入失败!密码错误");location="/login"</script>';
        } 
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
        //判断用户是否登入了
        if(empty(session('admin'))){
            return view('Admin.Index.login');exit;
        }

        return view('Admin.Index.index'); 
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
