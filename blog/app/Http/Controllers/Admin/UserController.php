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

    // 测试无刷新分页
    public function demo()
    {
        dump(1213);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 接收搜索的关键字
        $search = $request->input('search','');

        // 接收 搜索的 显示条数
        $count = $request->input('count',5);

        $user = new Users;

        $arr = $user->where('uname','like','%'.$search.'%')->paginate($count);

        // $grade = 2;
        // 统计用户个数
        $vip =  count($user->where([ 'grade' => 1 ])->get());
        $common =  count($user->where([ 'grade' => 0 ])->get());
        $root =  count($user->where([ 'grade' => 2 ])->get()); 
        // dd($vip);
        return view('Admin.User.index',['title'=>'用户列表','count'=>$count,'search'=>$search,'arr'=>$arr,'vip'=>$vip,'common'=>$common,'root'=>$root]);
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
        $user->status = $request->input('status',''); 
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

        $user =  Users::find($id);

        // 用户传过来的信息
        $data = $request->except('_token','_method');

        $user->uname = $data['uname'];
        $user->created_at = time();
        $user->tel = $data['tel'];
        $bool = $user->save(); 

        if($bool){
            return redirect('user')->with('success','用户修改成功');
        }else{
            return redirect('user')->with('error','用户修改失败');
        }

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
