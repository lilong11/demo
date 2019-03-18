<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersStoreRequest;
use App\Models\Users;
use App\Models\Usersinfos; 
use App\Models\works;
use App\Models\Issues;
use Illuminate\Support\Facades\Auth;
use DB;
class UserController extends Controller
{
    public function login()
    {
        // dump(123);
        return view('Home.users.login',['title'=>'账号登入']);
    }

    public function dologin(Request $request)
    {
        $uname = $request['uname'];
        $password = $request['password']; 
         // dd($uname);
        if (Auth::attempt(['uname' => $uname, 'password' => $password])) { 
            session(['home'=>$uname]);
            return redirect('/')->with('success','登入成功');
        }else{
            return redirect('/users/login')->with('errors','登入失败');
        }
    }

    public function index()
    {
        $works = new works; //查文章表
        $data = $works->all();  


        $issues = new Issues; //查文章表
        $datas = $issues->all(); 

        return view('Home.users.info',['title'=>'个人中心','data'=>$data,'datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dump('create');
        return view('Home.users.create',['title'=>'用户注册']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Users; 
        $user->uname = $request->input('uname','');
        $user->grade = $request->input('grade',0); 
        $user->status = $request->input('status',0); 
        $user->password = Hash::make($request->input('password',''));
        $user->tel = $request->input('tel','');
        // 执行添加到数据库
        $res1 = $user->save();
        // dump($res1);
        if ($res1) { 
            return redirect('/users/login')->with('success','注册成功');
        }else{
            return redirect('/users/create')->with('errors','注册失败');
        }
  
    } 

    public function edit($id)
    {
        dump('edit');
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
        dump('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dump('destroy');
    }

    public function exit()
    {
        session()->forget('home');
        return view('Home.Index.index',['title'=>'哈哈商城']);
    }

}
