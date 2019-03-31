<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersStoreRequest;
use App\Http\Requests\UsershomeStoreRequest;
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
        return view('Home.register.login',['title'=>'账号登入']);
    }

    public function dologin(Request $request)
    {
        $uname = $request['uname'];
        $password = $request['password'];     
        // 判断用户是否在数据库中存在
        if (Auth::attempt(['uname' => $uname, 'password' => $password])) {  

            $data = DB::table('users')->where('uname',$uname)->get();
            // 遍历查出来的用户id
            foreach($data as $k){
                $id = $k->id; 
                $status = $k->status;
            }
            // dd($status);
            // 判断用户是否被禁用
            if($status != 0){
             echo '<script>alert("您的用户疑似黑号,已被禁用");location="/users/login"</script>'; exit;
            }
             session(['uid'=>$id]);
             session(['home'=>$uname]);
             echo '<script>alert("登入成功.");location="/"</script>';
        }else{ 
            $request->flashOnly('uname');// 闪存用户名
             echo '<script>alert("登入失败!请检查密码是否正确");location="/users/login"</script>'; 
        }

    }

    public function index()
    {
        $work = new works; //查文章表
        $works = $work->where('status',0)->get(); 


        $issue = new Issues; //查问题表
        $issues = $issue->where('status',0)->get();

        $id = session('uid');
        $user = new Users;
        $users = $user->find($id); 
        $userInfo = $users->userinfo;
        // dd($users);
        return view('Home.users.info',['title'=>'个人中心','works'=>$works,'issues'=>$issues,'userInfo'=>$userInfo,'users'=>$users]);
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
    public function addUsers(UsershomeStoreRequest $request)
    {
        // dd(123);
        $user = new Users; 
        $user->uname = $request->input('uname','');
        $user->grade = $request->input('grade',0); 
        $user->status = $request->input('status',0); 
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
        // dump($res1);
        if ($res1 && $res2) {  
            echo '<script>alert("注册成功,将跳转到去登入");location="/users/login"</script>'; exit; 
        }else{
            echo '<script>alert("注册失败!请重新注册!")location="/users/create"</script>';  exit;
        }
  
    } 

    // 用户退出
    public function exit()
    {
        session()->forget('home');
        session()->forget('uid');
        return redirect('/');
    }

}
