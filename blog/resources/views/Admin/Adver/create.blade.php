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


            <div class="wrapper">
                    <!-- 右侧主体开始 -->
                    <div class="page-content">
                      <div class="content"> 
                       

                        <form class="layui-form"  method="post" action="/orders/adver/store" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            
                            <div class="layui-form-item">
                                <label for="level-name" class="layui-form-label">
                                    <span class="x-red">*</span>广告图片
                                </label>
                                <input type="file" name="apic" value="">
                                   
                            </div>
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