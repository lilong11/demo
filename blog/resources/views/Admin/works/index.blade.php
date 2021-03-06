	 <!-- 引入内容模块 -->
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
 
           @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif  

	            <style> .page_page{background: rgb(0,0,0,0); border-radius: 0.2rem; counter-reset: pagination; text-align: center; margin: 0px; } .page_page li{border: solid 1px #d6d6d6; border-radius: 0.2rem; color: #7d7d7d; text-decoration: none; text-transform: uppercase; display: inline-block; text-align: center; padding: 0.5rem 0.9rem; } </style>{{-- 分页样式 --}}

	            
	           @if (count($errors) > 0)
	                <div class="alert alert-danger">
	                    <ul>
	                        @foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                        @endforeach
	                    </ul>
	                </div>
	            @endif
				<div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
					<form action="/works" method="git">
                        {{ csrf_field() }}
	                    <div class="layui-input-inline"> 
	                        <input type="text" class="layui-input" autocomplete="off" name="search" value="{{ $search }}" placeholder="输入标题搜索">
	                    </div>
	                    <div class="layui-input-inline" style="width:80px">
	                        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
	                    </div>
					</form>
                  </div>
                </div>


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
	                            文章标题
	                        </th>	                        
	                        <th  style="text-align: center;">
	                            文章内容
	                        </th>
	                      	<th  style="text-align: center;">
	                            公告状态
	                        </th>
	                        <th>
	                        	图片
	                        </th>
							<th  style="text-align: center;">
	                            添加时间
	                        </th> 
	                        <th  style="text-align: center;">
	                            操作
	                        </th>
	                    </tr>
	                </thead>
	                <tbody>

						@foreach ($works as $k)
	                    <tr>
	                        <td>
	                            <input type="checkbox" value="1" name="">
	                        </td>
	                        <td>
	                            {{ $i++ }}
	                        </td>
	                        <td>
	                            {{ $k -> title }}
	                        </td>
	                        <td>
	                            {{ $k -> content }}
	                        </td>
	                        <td>   
	                            @switch($k -> status)
	                           		@case(0)
	                           		<a href="/aworks/1/{{$k->id}}"><img src="/uploads/public/0.png" style="width:30px;"></a> 
	                           		@break
	                           		@case(1)
	                           			<a href="/aworks/0/{{$k->id}}"><img src="/uploads/public/1.png" style="width:30px;"></a> 
	                           		@break 
	                           	@endswitch 
	                        </td>
	                       <td>
                            <img src="/uploads/{{ $k->img }}" alt="暂无图片" style="width:50px">
	                        
 							</td> 
	                        <td>
	                             {{ $k -> created_at }}
	                        </td> 
	                        <td class="td-manage">
	                            <a title="编辑" href="works/{{$k -> id }}/edit" style="text-decoration:none">
	                                <i class="layui-icon"></i>
	                            </a>

	                            <a title="删除" onclick="return confirm('确定要删除吗?')" href="worke/delete/{{$k -> id }}" style="text-decoration:none">
	                                <i class="layui-icon"></i>
	                            </a>

	                        </td>
	                    </tr>  
						@endforeach
					</tbody>
	            </table>
                <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button><button class="layui-btn" onclick="level_add('添加用户','user/create','','600','300')"><i class="layui-icon"></i>添加</button>	            
	           <!-- 分页 --> <span class="x-right"> <div class="page_page" style="padding-bottom: 0px;"> {{ $works->links() }} </div> </span></xblock>
         @endsection