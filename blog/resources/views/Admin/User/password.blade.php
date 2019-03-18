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
                            <!-- 右侧内容框架，更改从这里开始 --> 
                            <form class="layui-form" action="/user" method="post">
                                {{ csrf_field() }}
                                <div class="layui-form-item"> 
                            <form class="layui-form" action="/user/{{$data -> id}}" method="post">
                                {{ csrf_field() }}
                                <div class="layui-form-item">
                                <input name="_method" type="hidden" value="PUT"> 
                                    <label for="L_username" class="layui-form-label">
                                        <span class="x-red">*</span>旧密码
                                    </label>
                                    <div class="layui-input-inline">
                                        <input type="password" name="passwords" autocomplete="off" value=" " class="layui-input">
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <label for="L_pass" class="layui-form-label">
                                        <span class="x-red">*</span>新密码
                                    </label>
                                    <div class="layui-input-inline">
                                        <input type="password"  name="password"  autocomplete="off" value=" " class="layui-input">
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <label for="L_pass" class="layui-form-label">
                                        <span class="x-red">*</span>确认密码
                                    </label>
                                    <div class="layui-input-inline">
                                        <input type="password"  name="repassword"  autocomplete="off" value=" " class="layui-input">
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
                    <!-- 右侧内容框架，更改从这里结束 -->
                        </div>
                    </div>
                    <!-- 右侧主体结束 -->
                </div>
            </div>
                <!-- 中部结束 --> 
        @endsection
