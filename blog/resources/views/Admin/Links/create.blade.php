 @extends('Admin.layout.index')

        @section('title','添加链接')
        @section('content')


        <meta name="csrf-token" content="{{ csrf_token() }}">  <!-- ajax必须要添加的东西 -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/Admin_public/css/font.css">
        <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="/Admin_public/css/swiper.min.css">
        <!--  -->

        <script type="text/javascript" src="/Admin_public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/Admin_public/js/swiper.jquery.min.js"></script>
        <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>


        <body>
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
        
    <!-- 背景切换开始 -->
    <div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/Admin_public/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    <!-- 背景切换结束 -->
        </body>
    
 @endsection