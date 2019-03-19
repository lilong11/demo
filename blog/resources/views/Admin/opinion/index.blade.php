@extends('Admin/layout/index');
    @section('content')
                    @if (session('success'))
                    <div class="bs-example" data-example-id="dismissible-alert-css">
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                             {{ session('success') }}
                        </div>
                    </div>
                @endif
                    @if (session('error'))
                    <div class="bs-example" data-example-id="dismissible-alert-css">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                             {{ session('error') }}
                        </div>
                    </div>
                @endif
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/Admin_public/css/font.css">
        <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="../Admin_public/css/swiper.min.css">
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
        <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>
        <!-- 分页 -->
            <style> .page_page{background: rgb(0,0,0,0); border-radius: 0.2rem; counter-reset: pagination; text-align: center; margin: 0px; } .page_page li{border: solid 1px #d6d6d6; border-radius: 0.2rem; color: #7d7d7d; text-decoration: none; text-transform: uppercase; display: inline-block; text-align: center; padding: 0.5rem 0.9rem; } </style>


        <div class="page-content" style="color:white">
                  <div class="content">
                    <!-- 右侧内容框架，更改从这里开始 -->
                    <form class="layui-form xbs" action="/adv" method="get">
                        <div class="layui-form-pane" style="text-align: center;">
                          <div class="layui-form-item" style="display: inline-block;">
                         
                            
                            <div class="layui-input-inline">
                              <input type="text" name="search" placeholder="请输入用户名" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-input-inline" style="width:80px">
                                <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
                            </div>
                          </div>
                        </div> 
                    </form>
                
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
                                    姓名
                                </th> 
                                <th>
                                    手机号
                                </th>
                                <th>
                                    意见内容
                                </th>
                                <th>
                                    加入时间
                                </th>
                                <th>
                                    修改时间
                                </th>
                               
                                <th>
                                    操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>

     @foreach($opinion as $k=>$v)
        <tr>
                            <td>
                                <input type="checkbox" value="1" name="">
                            </td>
                            <td>
                                {{ $v->id }}
                            </td>
                            <td>
                                {{ $v->name }}
                            </td>

                            <td>
                                {{ $v->phone }}
                            </td>
                            <td>
                                {{ $v->content }}
                            </td>                     

                        <td>
                             {{ $v->created_at }}
                         </td> 
                          <td>
                             {{ $v->updated_at }}
                         </td>
                        
                            <td class="td-manage">
                              <!--   <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用">
                                    <i class="layui-icon"></i>
                                </a> -->
                                <!-- <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-edit.html','4','','510')" class="ml-5" style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a> -->
                                <a style="text-decoration:none"  href="/admin/opinion/{{ $v->id }}/edit" title="修改">
                                    <i class="layui-icon"></i>
                                </a>


                                <a title="删除" href="/admin/opinion/delete/{{ $v->id }}" onclick = 'return confirm("确认删除吗")' style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a>
                           
                            </td>
                 </tr>
     @endforeach

    
                    </tbody>
                </table>
                <!-- 右侧内容框架，更改从这里结束 -->
              </div>
            </div>
    @endsection