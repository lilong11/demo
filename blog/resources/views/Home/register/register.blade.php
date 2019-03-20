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
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="../admin_public/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="../admin_public/js/xadmin.js"></script>
    <link rel="stylesheet" href="../boot/css/bootstrap.css">
    <script type="text/javascript" src="../boot/js/bootstrap.js"></script>

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
</head>
<body>
    <div class="login-logo"><h1>用户账号注册</h1></div>
    <div class="login-box" style="width:600px;height:600px;">
          <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                <ul id="myTabs" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class=""><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">普通注册</a></li>
                  <li role="presentation" class="active" style="position: absolute;left:1020px;top:90px;"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">手机号注册</a></li>
                </ul>
              <div id="myTabContent" class="tab-content">
               <!-- 普通注册 -->
                <div role="tabpanel" class="tab-pane fade" id="home" aria-labelledby="home-tab">
                    <p><form class="layui-form layui-form-pane" action="/users" method="post" >
                          {{ csrf_field() }}
                          <label class="login-title" for="username"> </label>
                          <div class="layui-form-item">
                              <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont">&#xe6b8;</i></label>
                              <div class="layui-input-inline login-inline">
                                <input type="text" name="uname" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input " style="width:480px;" required autofocus>
                              </div>
                          </div>

                          <label class="login-title" for="password">密码</label>
                          <div class="layui-form-item">
                              <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont">&#xe82b;</i></label>
                              <div class="layui-input-inline login-inline">
                                <input type="password" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" style="width:480px;">
                              </div>
                          </div>

                          <label class="login-title" for="password">确认密码</label>
                          <div class="layui-form-item">
                              <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont" style="width:90px;">&#xe82b;</i></label>
                              <div class="layui-input-inline login-inline">
                                <input type="password" name="repassword" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" style="width:480px;">
                              </div>
                          </div>

                          <label class="login-title" for="password">手机号</label>
                          <div class="layui-form-item">
                              <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont" style="width:90px;">&#xe82b;</i></label>
                              <div class="layui-input-inline login-inline">
                                <input type="text" name="tel" lay-verify="required" placeholder="手机号" autocomplete="off" class="layui-input" style="width:480px;">
                              </div>
                          </div>

                          <div class="form-actions"  style="width:110;height:120px;">
                              <button class="btn btn-warning pull-right" lay-submit lay-filter="login"  type="submit" style="position: absolute;left:810px;">登录</button> <br><br>
                              <div class="forgot"><a href="#" class="forgot">忘记帐号或者密码</a></div>     
                          </div>
                    </form></p> 
                </div>
                <!-- 手机注册 -->
                <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="profile-tab">
                    <p><form class="layui-form layui-form-pane" action="/doRegister" method="post" >
                            {{ csrf_field() }}

                            <label class="login-title" for="password">手机号</label>
                            <div class="layui-form-item">
                                <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont">&#xe82b;</i></label>
                                <div class="layui-input-inline login-inline">
                                  <input id="phone" type="text" name="tel" value="{{ old('tel') }}" lay-verify="required" placeholder="手机号" autocomplete="off" class="layui-input"  style="width:260px;">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont" style="width:90px;">&#xe82b;</i></label>
                                <div class="layui-input-inline login-inline">
                                  <input id="phone" type="text" name="gains" value="{{ old('gains') }}" lay-verify="required" placeholder="接收的验证码" autocomplete="off" class="layui-input" style="width:260px;">
                                </div>
                                <a onclick="gain()" class="btn" style="width:150px;height:36px;position: absolute;left:920px;">获取验证码</a>
                            </div>

                            <label class="login-title" for="password">密码</label>
                            <div class="layui-form-item">
                                <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont">&#xe82b;</i></label>
                                <div class="layui-input-inline login-inline">
                                  <input type="password" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" style="width:480px;">
                                </div>
                            </div>

                            <label class="login-title" for="password">确认密码</label>
                            <div class="layui-form-item">
                                <label class="layui-form-label login-form" style="width:90px;"><i class="iconfont" style="width:90px;">&#xe82b;</i></label>
                                <div class="layui-input-inline login-inline">
                                  <input type="password" name="repassword" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" style="width:480px;">
                                </div>
                            </div>
                    
                          <div class="form-actions"  style="width:110;height:120px;">
                              <button class="btn btn-warning pull-right" lay-submit lay-filter="login"  type="submit" style="position: absolute;left:810px;">登录</button> <br><br>
                              <div class="forgot"><a href="#" class="forgot">忘记帐号或者密码</a></div>     
                          </div>
                    </form></p>
                </div>
              </div>

          </div>
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
<!-- 获取验证码 -->
<script type="text/javascript">
  function gain(){
    // 获取手机号
    var phone = $('#phone').val();

    var preg_phone = /^1{1}[3-9]{1}[\d]{9}$/;

    if(!preg_phone.test(phone)){
      alert('请输入正确的手机号');return;
    }

     $.get('/doRegister/gain',{phone:phone},function(data){
         if(data.error_code == '0'){
          alert('发送成功')
         }else{
          alert('发送失败')
         }
     },'json');
   }
</script>
</html>