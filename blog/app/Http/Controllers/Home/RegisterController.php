<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\Usersinfos; 

class RegisterController extends Controller
{
    public function phone()
    {
    	return view('Home.register.register',['title'=>'手机号注册']);
    }

    public function doPhone(Request $request)
    {
    	$password = $request['password'];
    	$repassword = $request['repassword'];
    	$preg_phone = '/^1{1}[3-9]{1}[\d]{9}$/';//正则判断手机号
		//比较密码长度
		$len = strlen($password);

    	if($password != $repassword){
    		 $request->flashOnly('tel','gains');
             echo '<script>alert("登入失败!请检查密码是否正确");location="/register"</script>'; exit;
    	}

    	if(session('rand') != $request->gains){
    		 $request->flashOnly('tel','gains');
             echo '<script>alert("注册失败!验证码错误");location="/register"</script>'; exit;
    	}

    	if(!preg_match($preg_phone,$request['tel'])){
    		 $request->flashOnly('tel','gains');
             echo '<script>alert("请输入正确的手机号");location="/register"</script>'; exit;
    	}

    	if($len <6 || $len>16){
    		 $request->flashOnly('tel','gains');
             echo '<script>alert("密码太短哦6~15位");location="/register"</script>'; exit;
			}


        //用户添加处理 
        $user = new Users;
        $user->uname = $request->input('tel',''); 
        $user->tel = $request->input('tel',''); 
        $user->password = Hash::make($request->input('password',''));
        // 执行添加到数据库
        // dd($user);
        $res1 = $user->save();

        // 获取用户刚刚添加的id
        $uid = $user->id;
        // 用户详情表
        $userinfo = new Usersinfos;
        $userinfo->uid = $uid;
        $userinfo->tel = $request->input('tel','');
        // dd($userinfo);
        $res2 = $userinfo->save();
        //判断是否添加成功
         if($res1 && $res2){ 
         	 session()->forget('gains');
             echo '<script>alert("注册成功,将跳转 登入");location="/users/login"</script>'; exit;
        }else{ 
             echo '<script>alert("注册失败!");location="/users/create"</script>'; exit;
        } 

    }    

    public function gain(Request $request)
    {
    	
    	$phone = $request->phone;
    	$rand = rand(1234,9999);
    	session(['rand'=>$rand]);
		$url = "http://v.juhe.cn/sms/send";
		$params = array(
		    'key'   => '135aefedc80f3430290b8d63c62e4880', //您申请的APPKEY
		    'mobile'    => $phone, //接受短信的用户手机号码
		    'tpl_id'    => '144430', //您申请的短信模板ID，根据实际情况修改
		    'tpl_value' =>'#code#='.$rand //您设置的模板变量，根据实际情况修改
		);

		$paramstring = http_build_query($params);
		$content = self::juheCurl($url, $paramstring);
		
		if($content){
			echo $content;
		}else{
			echo $content;
		}

    }


		/**
		 * 请求接口返回内容
		 * @param  string $url [请求的URL地址]
		 * @param  string $params [请求的参数]
		 * @param  int $ipost [是否采用POST形式]
		 * @return  string
		 */
		public static function juheCurl($url, $params = false, $ispost = 0)
		{
		    $httpInfo = array();
		    $ch = curl_init();

		    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		    curl_setopt($ch, CURLOPT_USERAGENT, 'JuheData');
		    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		    if ($ispost) {
		        curl_setopt($ch, CURLOPT_POST, true);
		        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		        curl_setopt($ch, CURLOPT_URL, $url);
		    } else {
		        if ($params) {
		            curl_setopt($ch, CURLOPT_URL, $url.'?'.$params);
		        } else {
		            curl_setopt($ch, CURLOPT_URL, $url);
		        }
		    }
		    $response = curl_exec($ch);
		    if ($response === FALSE) {
		        //echo "cURL Error: " . curl_error($ch);
		        return false;
		    }
		    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		    $httpInfo = array_merge($httpInfo, curl_getinfo($ch));
		    curl_close($ch);
		    return $response;
		} 

}
