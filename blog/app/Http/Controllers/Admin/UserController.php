<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersStoreRequest;
use App\Models\Users;
use App\Models\Usersinfos;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new Users;
        $arr = Users::simplePaginate(6); 
        // dd($arr);
        // dump($arr);
        return view('Admin.User.index',['title'=>'用户列表','arr'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User.create',['title'=>'用户添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStoreRequest $request)
    {
        //用户添加处理 
        $user = new Users;

        $user->uname = $request->input('uname','');
        $user->grade = $request->input('grade','');
        $user->password = Hash::make($request->input('password',''));
        $user->tel = $request->input('tel','');
        // 执行添加到数据库
        $res1 = $user->save();

        // 获取用户刚刚添加的id
        $uid = $user->id;
        // 用户详情表
        $userinfo = new Usersinfos;
        $userinfo->uid = $uid;
        $userinfo->tel = $request->input('tel','');
        $res2 = $userinfo->save();

        // dump($res);
        // dump($ress);

         if($res1 && $res2){
            DB::commit();
            return redirect('user')->with('success','添加成功');
        }else{
             DB::rollBack();
            return redirect('user')->with('error','添加失败');
        }
        // dump($uid);
        // 添加到用户详情表中
        // $user->tel = $request->input('tel','');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dump($id);
        $data = Users::find($id);
        // dump($data);
        return view('Admin.User.edit',['title'=>'用户修改','data'=>$data]);
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


    public function delete($id)
    {
        //用户删除
        // dd($id);
        $bool = Users::destroy($id);
        if($bool){

            return redirect('user')->with('success','用户删除成功');
        }else{

            return redirect('user')->with('error','用户删除失败');
        }
    }

    
}
