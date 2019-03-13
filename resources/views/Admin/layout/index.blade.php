<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin1.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../../Admin_public/css/font.css">
    <link rel="stylesheet" href="../../Admin_public/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="../../Admin_public/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="../../Admin_public/js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="./Admin_public/index.html">X-ADMIN V1.1</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="">个人信息</a></dd>
              <dd><a href="">切换帐号</a></dd>
              <dd><a href="./Admin_public/login.html">退出</a></dd>
            </dl>
          </li> 
          <li class="layui-nav-item"><a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
        <!-- 内容的开始 -->
        @section('content')

        @show
        <!-- 内容的结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>  
    </div>
    <!-- 底部结束 -->
    <!-- 背景切换开始 -->
    <div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./Admin_public/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    <!-- 背景切换结束 -->
    <script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>