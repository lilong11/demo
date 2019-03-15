<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersStoreRequest;
use App\Models\Users;
use App\Models\Usersinfos;
class UserController extends Controller
{
    public function login()
    {
        // dump(123);
        return view('Home.users.login',['title'=>'账号登入']);
    }

    public function dologin(Request $request)
    {
        // dump(123);
        dump($request->all());
    }



    public function index()
    {
        return view('Home.users.info',['title'=>'个人中心']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.users.create',['title'=>'用户注册']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStoreRequest $request)
    {

        dump(5201314);
        //用户添加处理 
        // $user = new Users;

        // $user->uname = $request->input('uname','');
        // $user->password = Hash::make($request->input('password',''));
        // $user->tel = $request->input('tel','');
        // // 执行添加到数据库
        // $res1 = $user->save();
        // if($res1){
        //     return redirect('home/login')->with('success','添加成功');
        // }else{
        //     return redirect('home/login')->with('error','添加失败');
        // }
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dump('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
}
