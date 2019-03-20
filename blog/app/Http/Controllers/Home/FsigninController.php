<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Fsignin;
use DB;

class FsigninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //签到
        //签到添加
        //判断用户是否登录
        if ($request->session()->exists('home')){
            //获取用户
            $user = $request->session()->all();
            // dump($user['home']);
            $users = Users::where('uname',$user['home'])->get();
            //获取用户id
            foreach($users as $k=>$v){
                // dump($v->id);
                $id = $v->id;
            }
            //获取当前用户id,签到的数据
            $fsignin = Fsignin::where('fid',$id)->get();
            //判断用户是否是第一次签到
            //如果没有数据则返回null
            if($fsignin->first()){
                //判断当前用户签到的时间是否超过24小时
                foreach($fsignin as $k=>$v){
                    $time = $v->yttime+60*60*24;
                    if($time <= $v->yttime){
                       $res = DB::table('fsignins')->where('id', $v->id)->update(['yttime' => time(), 'husint' => $v->husint+5]);
                       echo '签到成功,3秒后自动跳转,如不跳转请点击<a href="/">返回</a><meta http-equiv="refresh" content="3;URL=/">';

                    }else{
                        echo '签到时间未超24小时,签到失败,3秒后自动跳转,如不跳转请点击<a href="/">返回</a><meta http-equiv="refresh" content="3;URL=/">';
                    }
                }
            }else{
                $res = DB::table('fsignins')->insert(['fid' => $id, 'yttime' => time(), 'husint' => 5 ]);
                echo '签到成功,3秒后自动跳转,如不跳转请点击<a href="/">返回</a><meta http-equiv="refresh" content="3;URL=/">';
            }
        }else{
           //登录用户
            return view('Home.users.login',['title'=>'账号登入']); 
        }         
    }

   
}
