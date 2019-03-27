@extends('Admin/layout/index');
    @section('content')


        @if (session('success'))
            <div class="n1" style=" height='100'; color:#48D1CC;">
                
            {{ session('success') }}
            </div>

        @endif
        @if (session('error'))
            <div class="n1" style=" height='100'; color:red;">
            {{ session('error') }}
            </div>
        @endif


        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/Admin_public/css/font.css">
        <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="/Admin_public/css/swiper.min.css">
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
        <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>
        <div class="page-content" style="color:white">
                  <div class="content">
                    <!-- 右侧内容框架，更改从这里开始 -->
                    <form class="layui-form xbs" action="/adv" method="get">
                        <div class="layui-form-pane" style="text-align: center;">
                          <div class="layui-form-item" style="display: inline-block;">
                         
                            
                            <div class="layui-input-inline">
                              <input value="{{ $all['search'] or ''}}" type="text" name="search" placeholder="请输入用户名" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-input-inline" style="width:80px">
                                <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
                            </div>
                          </div>
                        </div> 
                    </form>
                    <style type="text/css" media="screen">
                        
                    .page_page1{
                        float: right;
                        margin: 0px auto;
                    }
                    li.active {
                        display: inline-block;
                        background-color:  #48D1CC;
                        /* border: 8px solid #4CAF50; */
                        padding: 8px 16px;
                        /* width: 44px; */
                    }
                    /* li{
                        display: inline-block;
                        background-color: #4CAF50;
                    } */
                    ul.page_page1 {
                        display: inline-block;
                        padding: 0;
                        margin: 0 auto;
                       
                    }

                    ul.page_page1 li {display: inline;}

                    ul.page_page1 li a {
                        color: black;
                        /* float: left; */
                        padding: 8px 16px;
                        text-decoration: none;
                        border-radius: 5px;
                    }

                    ul.page_page1 li a.active {
                        background-color: #4CAF50;
                        color: white;
                        border-radius: 5px;
                        border: 1px solid #4CAF50;
                    }

                    ul.page_page1 li a:hover:not(.active) {background-color: #ddd;}
                    </style>
                
                    <table class="layui-table">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="" value="">
                                </th>
                                <th>
                                    ID
                                </th>
                                <th>
                                    广告
                                </th> 
                                <th>
                                    状态
                                </th>
                                
                             
                             <!--    <th>
                                    加入时间
                                </th>
                                <th>
                                    修改时间
                                </th> -->
                               
                                <th>
                                    操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
    <!-- <tr>
                            <td>
                                <input type="checkbox" value="1" name="">
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                <u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')">
                                    小明
                                </u>
                            </td>
                            <td>
                                男
                            </td>
                            <td>
                                13000000000
                            </td>
                            <td>
                                admin@mail.com
                            </td>
                            <td>
                                北京市 海淀区
                            </td>
                            <td>
                                2017-01-01 11:11:42
                            </td> 
                            <td>
                                2017-01-01 11:11:42
                            </td>
                            <td class="td-status">
                                <span class="layui-btn layui-btn-normal layui-btn-mini">
                                    已启用
                                </span>
                            </td>
                            <td class="td-manage">
                                <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用">
                                    <i class="layui-icon"></i>
                                </a>
                                <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-edit.html','4','','510')" class="ml-5" style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a>
                                <a style="text-decoration:none" onclick="member_password('修改密码','member-password.html','10001','600','400')" href="javascript:;" title="修改密码">
                                    <i class="layui-icon"></i>
                                </a>
                                <a title="删除" href="javascript:;" onclick="member_del(this,'1')" style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a>
                            </td>
    </tr> -->
     @foreach($adv as $k=>$v)
    	<tr>
                            <td>
                                <input type="checkbox" value="1" name="">
                            </td>
                            <td>
                                {{ $v->id }}
                            </td>
                            <td>
                            <image src="/uploads/{{ $v->guanggao }}" width='80'>                             
                            </td>

                            <td>
                                <button type="button" class="btn ">
                                    <a href="/adv/status/{{ $v->id }}">
                                    @switch($v->status)
                                        @case(1)
                                        开启
                                        @break
                                        @case(0)
                                        禁用
                                    @endswitch
                                    </a>

                                 </button>
                            </td>
                          
                        
                           
                         <!--    <td>
                             2017-01-01 11:11:42
                         </td> 
                          <td>
                             2017-01-01 11:11:42
                         </td> -->
                        
                            <td class="td-manage">
                              <!--   <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用">
                                    <i class="layui-icon"></i>
                                </a> -->
                                <!-- <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-edit.html','4','','510')" class="ml-5" style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a> -->
                             <!--    <a style="text-decoration:none"  href="/adv/{{ $v->id }}/edit" title="修改">
                                    <i class="layui-icon"></i>
                                </a> -->


                                <a title="删除" href="adv/delete/{{ $v->id }}" onclick = 'return confirm("确认删除吗")' style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a>
                           
                            </td>
                 </tr>
     @endforeach

                    </tbody>
                </table>
                <div class="page_page1" class="page_page1">
    
                {{ $adv->appends($all)->links() }}
                </div>
                <!-- 右侧内容框架，更改从这里结束 -->
              </div>
            </div>
    @endsection