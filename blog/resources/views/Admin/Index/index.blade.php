	 <!-- 引入内容模块 -->
 @extends('Admin.layout.index')
      
        
        
        @section('content')
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../Admin_public/css/font.css">
        <link rel="stylesheet" href="../Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="../Admin_public/css/swiper.min.css">
        <!--  -->

        <script type="text/javascript" src="../Admin_public/js/jquery.min.js"></script>
        <script type="text/javascript" src="../Admin_public/js/swiper.jquery.min.js"></script>
        <script src="../Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="../Admin_public/js/xadmin.js"></script>
         <fieldset class="layui-elem-field layui-field-title site-title">
              <legend><a name="default">信息统计</a></legend>
         </fieldset>
         <table class="layui-table">
                <thead>
                    <tr>
                        <th>统计</th>
                        <th>资讯库</th>
                        <th>图片库</th>
                        <th>产品库</th>
                        <th>用户</th>
                        <th>管理员</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>总数</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>{{$usernum or '0'}}</td>
                        <td>{{$usernum or '0'}}</td>
                    </tr>
                    <tr>
                        <td>今日</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>昨日</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>本周</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>本月</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
         </table>
        @endsection