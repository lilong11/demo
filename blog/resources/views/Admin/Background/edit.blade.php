<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title or '用户操作'}}</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/Admin_public/css/font.css">
    <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script> 
</head>
<body>
<!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/background/{{ $id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }} 
                <input name="_method" type="hidden" value="PUT"> 
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>背景上传
                    </label>
                    <div class="layui-input-inline">
                       <input type="file" name="img">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        增加
                    </button>
                </div>
            </form>
<!-- 右侧内容框架，更改从这里结束 -->    
</body>
</html>
