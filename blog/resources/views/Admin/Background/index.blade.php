 <!-- 引入左边模块 -->
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



                <style> .page_page{background: rgb(0,0,0,0); border-radius: 0.2rem; counter-reset: pagination; text-align: center; margin: 0px; } .page_page li{border: solid 1px #d6d6d6; border-radius: 0.2rem; color: #7d7d7d; text-decoration: none; text-transform: uppercase; display: inline-block; text-align: center; padding: 0.5rem 0.9rem; } </style>{{-- 分页样式 --}}


		<div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
					

                  </div>
                </div> 
             	<table class="layui-table"> 

             	<table class="layui-table"  style="text-align: center;"> 
	                <thead>
	                    <tr>
	                        <th  style="text-align: center;">
	                            <input type="checkbox" name="" value="">
	                        </th>
	                        <th  style="text-align: center;">
	                            编号
	                        </th>
	                        <th  style="text-align: center;">
	                            图片
	                        </th>  
	                      	<th style="text-align: center;">
	                            用户状态
	                        </th>
	                        <th  style="text-align: center;">
	                            操作
	                        </th>
	                    </tr>
	                </thead>
	                <tbody>


	                    @foreach ($Backgrounds as $k)
	                    <tr>
	                        <td>
	                            <input type="checkbox" value="1" name="">
	                        </td>
	                        <td>
	                            {{ $i++ }}
	                        </td>  
	                        <td>
	                        <img src="/uploads/{{$k->img}}" alt="" style="width:100px">
	                        </td>  
	                        <td>   
	                            @switch($k -> status)
	                           		@case(0)
	                           		<a href="/Background/1/{{$k->id}}"><img src="/uploads/public/0.png" style="width:30px;"></a> 
	                           		@break
	                           		@case(1)
	                           			<a href="/Background/0/{{$k->id}}"><img src="/uploads/public/1.png" style="width:30px;"></a> 
	                           		@break 
	                           	@endswitch 
	                        </td>  
	                        <td class="td-manage">
	                            <a  class="list" title="编辑" href='/background/{{$k -> id}}/edit'><i class="layui-icon"></i></a>

	                            <a title="删除" onclick="return confirm('确定要删除吗?')" href="backgroundExit/{{$k -> id }}" style="text-decoration:none">
	                                <i class="layui-icon"></i>
	                            </a>
	                        </td>
	                    </tr>  
					    @endforeach
	                </tbody>
	            </table>
                <xblock> 
	            <!-- 分页 -->
	            <span class="x-right"> <div class="page_page" style="padding-bottom: 0px;"> </div> </span>
				<button class="layui-btn" onclick="level_add('背景添加','/background/create','','1200','600')"><i class="layui-icon"></i>添加</button>
                </xblock>
                
				<script>
		            // 增加
		            function level_add (title,url,id,w,h) {
		                x_admin_show(title,url,w,h); 
		            }
				</script>
        @endsection