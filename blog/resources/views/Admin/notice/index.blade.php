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
                    <form class="layui-form xbs" action="/admin/notice" method="get">
                        <div class="layui-form-pane" style="text-align: center;">
                          <div class="layui-form-item" style="display: inline-block;">
                         
                            
                            <div class="layui-input-inline">
                              <input value="{{ $all['search'] or '' }}" type="text" name="search" placeholder="请输入用户名" autocomplete="off" class="layui-input">
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
                                    公告
                                </th>
                                <th>
                                    状态
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

     @foreach($notice as $k=>$v)
        <tr>
                            <td>
                                <input type="checkbox" value="1" name="">
                            </td>
                            <td>
                                {{ ($notice->currentpage()-1)*3 + $i++ }}
                            </td>
                            <td>
                                {{ $v->notice }}
                            </td>  
                            <td>
                            <button type="" class="btn">
                            <a href="/admin/notice/status/{{ $v->id }}">
                                @switch($v->status)
                                @case(1)
                                开启
                                @break
                                @case(0)
                                关闭
                                @endswitch
                            </a>
                            </button>
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
                                <a style="text-decoration:none"  href="/admin/notice/{{ $v->id }}/edit" title="修改">
                                    <i class="layui-icon"></i>
                                </a>


                                <a title="删除" href="/admin/notice/delete/{{ $v->id }}" onclick = 'return confirm("确认删除吗")' style="text-decoration:none">
                                    <i class="layui-icon"></i>
                                </a>
                           
                            </td>
                 </tr>
     @endforeach

    
                    </tbody>
                </table>
                {{ $notice->appends($all)->links() }}
                <!-- 右侧内容框架，更改从这里结束 -->
              </div>
            </div>
    @endsection