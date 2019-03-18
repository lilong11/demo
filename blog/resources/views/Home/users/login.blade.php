<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{$title or '用户操作'}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../admin_public/css/font.css">
    <link rel="stylesheet" href="../admin_public/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="../admin_public/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="../admin_public/js/xadmin.js"></script>

</head>
<body>
    <div class="login-logo"><h1>账号登录</h1></div>
    <div class="login-box" style="width:600px;height:560px;">

        <form class="layui-form layui-form-pane" action="/users/doLogin" method="post" >
                          
                          {{ csrf_field() }}
                          <h3><a href=""><i class="iconfont">&#xe6b8;</i> 手机号登入</a></h3>
                          <h3 style="position: absolute;right:680px;top:140px;"><a href=""><i class="iconfont">&#xe6b8;</i> 普通登入</a></h3>
                          <label class="login-title" for="username">帐号</label>
                          <div class="layui-form-item">
                              <label class="layui-form-label login-form" style="width:90px;width:90px;height:32px"><i class="iconfont">&#xe6b8;</i></label>
                              <div class="layui-input-inline login-inline">
                                <input type="text" name="uname" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input " style="width:480px;height:50px">
                              </div>
                          </div>

                          <label class="login-title" for="password">密码</label>
                          <div class="layui-form-item">
                              <label class="layui-form-label login-form" style="width:90px;height:32px"><i class="iconfont">&#xe82b;</i></label>
                              <div class="layui-input-inline login-inline">
                                <input type="password" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" style="width:480px;height:50px">
                              </div>
                          </div>
                  
                          <label class="login-title" for="password">验证码</label>
                          <div class="layui-form-item">
                              <label class="layui-form-label login-form" style="height:42px;width:90px;"><i class="iconfont" style="line-height: 35px;">&#xe82b;</i></label>
                              <div class="layui-input-inline login-inline">
                                <input type="text" name="yzm" lay-verify="required" autocomplete="off" class="layui-input" style="height:60px">
                              </div>
                              <label style="width:150px;"><img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码" style="width:190px;cursor:pointer;"></label>
                              <!-- 判断验证码是否错误 -->
                        {{--   if($errors -> has ('captcha'))
                              <span class="help-block">
                                <strong>{{$errors->first('captcha')}}</strong>
                              </span>
                            @endif --}}  
                          </div><br>

                          <div class="form-actions"  style="width:110;height:120px; cursor:pointer;">
                              <button class="btn btn-warning pull-right" lay-submit lay-filter="login"  type="submit">登录</button> 
                              <div class="forgot"><a href="#" class="forgot">忘记帐号或者密码</a></div>     
                          </div>

        </form>
    </div>
  <div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="../admin_public/images/l.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
</body>
</html>