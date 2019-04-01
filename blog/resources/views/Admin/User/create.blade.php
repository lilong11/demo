
 <!-- 引入左边模块 -->
 @extends('Admin.layout.index')
         @section('content')
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
            <link rel="stylesheet" href="/Admin_public/css/font.css">
            <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
            <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
            <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
            <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
            <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>
            <!-- 中部开始 -->
            <div class="wrapper">
                <!-- 右侧主体开始 -->
                <div class="page-content">
                  <div class="content">
                   @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                         @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- 右侧内容框架，更改从这里开始 -->
                        <form class="layui-form" action="/user" method="post">
                            {{ csrf_field() }}
                            <div class="layui-form-item">
                                <label for="L_username" class="layui-form-label">
                                    <span class="x-red">*</span>昵称
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text" name="uname" autocomplete="off" value="{{ old('uname') }}" placeholder="用户名" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label for="L_pass" class="layui-form-label">
                                    <span class="x-red">*</span>密码
                                </label>
                                <div class="layui-input-inline">
                                    <input type="password"  name="password"  autocomplete="off" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label for="L_repass" class="layui-form-label">
                                    <span class="x-red">*</span>确认密码
                                </label>
                                <div class="layui-input-inline">
                                    <input type="password" name="repassword" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label for="L_pass" class="layui-form-label">
                                    <span class="x-red">*</span>手机号
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text"  name="tel"  autocomplete="off" value="{{ old('tel') }}" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-form-item">
                              <label class="layui-form-label">选择等级</label>
                              <div class="layui-input-inline">
                                <select name="grade" value="{{ old('grade') }}">
                                  <option value="">请选择</option>
                                  <option value="0">普通用户</option>
                                  <option value="1">vip 用户</option>
                                  <option value="2">超级管理员</option>
                                </select>
                              </div>
                            </div>

                            <div class="layui-form-item"> 
                              <label class="layui-form-label">是否使用</label>
                              <div class="layui-input-inline">
                                <select name="status" value="{{ old('status') }}">
                                  <option value="">请选择</option>
                                  <option value="0">使用</option>
                                  <option value="1">只注册不使用</option>
                                </select>
                              </div>
                            </div>

                            <div class="layui-form-item"> 
                                <label for="L_repass" class="layui-form-label">
                                </label>
                                <button  class="layui-btn" lay-filter="add" lay-submit="">
                                    {{ $title or '用户操作' }}
                                </button>
                            </div>
                        </form>
                  </div>
                </div>
                <!-- 右侧主体结束 -->
            </div>
            <!-- 中部结束 -->
        @endsection
