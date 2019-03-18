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
                        <!-- 显示错误提示  开始-->
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- 显示错误提示  结束-->

                        <form class="layui-form"  method="post" action="/admin/links">
                        {{ csrf_field() }}
                            <div class="layui-form-item">
                                <label for="level-name" class="layui-form-label">
                                    <span class="x-red">*</span>链接名称
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text" id="level-name" name="lname" value="{{ old('lname') }}"
                                    class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label for="level-name" class="layui-form-label">
                                    <span class="x-red">*</span>链接地址
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text" id="level-name" name="lurl" value="{{ old('lurl') }}"
                                    class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label for="level-name" class="layui-form-label">
                                    <span class="x-red">*</span>链接图片
                                </label>
                                <input type="file" name="limg" value="" />
                                <input type="hidden" name="pic" value="">
                                <img src="" alt="" width="100" height="100" style="margin-left:200px;margin-top:-50px">
                                
                                    
                                <!-- <input id="file" type="file"  name="limg"  > -->
                                                  
                            </div>

                          

                            <!-- <div class="layui-form-item">
                                <label for="L_repass" class="layui-form-label">
                                </label>
                                <button  class="layui-btn" lay-filter="save" lay-submit="">
                                    提交
                                </button>
                            </div> -->
                            <div class="layui-form-item">
                            <label for="L_repass" class="layui-form-label"></label>
                                <input class="layui-btn" type="submit" value="确认添加" style="border-radius:5px;" >
                            </div>
                        </form> 
                      
                      </div>
                    </div>
                    <!-- 右侧主体结束 -->
                </div>
                <!-- 中部结束 -->
        @endsection
