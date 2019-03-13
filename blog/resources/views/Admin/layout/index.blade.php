
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title or '用户操作'}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container" style="  width: 100%;height: 71px;background-color: rgba(0, 0, 0, 0.25);border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
        <div class="logo"><a href="../Admin_public/index.html">{{$title or '用户操作'}}</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="">个人信息</a></dd>
              <dd><a href="">切换帐号</a></dd>
              <dd><a href="../Admin_public/login.html">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item"><a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">

          <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="admin">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                
                <!-- 左边管理栏目开始 -->
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        用户管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/user">
                                <i class="iconfont">&#xe6a7;</i>
                                用户列表
                            </a>
                        </li>
                        <li>
                            <a href="/user/create">
                                <i class="iconfont">&#xe6a7;</i>
                                用户添加
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        文章管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/works">
                                <i class="iconfont">&#xe6a7;</i>
                                文章列表
                            </a>
                        </li>
                        <li>
                            <a href="/works/create">
                                <i class="iconfont">&#xe6a7;</i>
                                文章添加
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- 左边管理栏目结束 -->
            </ul>
          </div>

        </div>
        <!-- 左侧菜单结束 -->

        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            @section('content')

            @show
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>  
    </div>
    <!-- 底部结束 -->
    <!-- 背景切换开始 -->
    <div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="../Admin_public/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    <!-- 背景切换结束 -->
</body>
</html>