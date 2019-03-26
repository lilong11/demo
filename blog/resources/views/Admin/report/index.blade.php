@extends('Admin/layout/index');
    @section('content')
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/Admin_public/css/font.css">
        <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="../Admin_public/css/swiper.min.css">
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
        <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>
        <div class="page-content" style="color:white">
                  <div class="content">
                    <!-- 右侧内容框架，更改从这里开始 -->
                    <form class="layui-form xbs" action="/admin/report" method="get">
                        <div class="layui-form-pane" style="text-align: center;">
                          <div class="layui-form-item" style="display: inline-block;">
                         
                            
                            <div class="layui-input-inline">
                              <input value="{{ $all['search']  or '' }}" type="text" name="search" placeholder="请输入用户名" autocomplete="off" class="layui-input">
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
                                    邮箱
                                </th>
                                <th>
                                    举报图片
                                </th>   
                                <th>
                                    说明
                                </th>  
                                <th>
                                    加入时间
                                </th> 
                                <th>
                                    修改时间
                                </th>

                                
                             
                                <!-- <th>
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
     @foreach($report as $k=>$v)
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
                                {{ $v->email }}
                            </td>
                            <td>
                            <image src="/uploads/{{ $v->pic }}" width='80'>                             
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
                             <!--    <a style="text-decoration:none"  href="/admin/report/{{ $v->id }}/edit" title="修改">
                                    <i class="layui-icon"></i>
                                </a> -->


                                <a title="删除" href="/admin/report/delete/{{ $v->id }}" onclick = 'return confirm("确认删除吗")' style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a>
                           
                            </td>
                 </tr>
     @endforeach

                    </tbody>
                </table>
                {{ $report->appends($all)->links() }}
                <!-- 右侧内容框架，更改从这里结束 -->
              </div>
            </div>
    @endsection
