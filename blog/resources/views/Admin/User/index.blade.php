 <!-- 引入左边模块 -->
 @extends('Admin.layout.index')
        @section('content')
	            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
			    <link rel="stylesheet" href="../Admin_public/css/font.css">
			    <link rel="stylesheet" href="../Admin_public/css/xadmin.css">
			    <link rel="stylesheet" href="../Admin_public/css/swiper.min.css"> 
			    <!-- 统计图js 引入 -->
				<script type="text/javascript" src="../js/echarts.min.js"></script> 
			    <script type="text/javascript" src="../Admin_public/js/jquery.min.js"></script>
			    <script type="text/javascript" src="../Admin_public/js/swiper.jquery.min.js"></script>
			    <script src="../Admin_public/lib/layui/layui.js" charset="utf-8"></script>
			    <script type="text/javascript" src="../Admin_public/js/xadmin.js"></script> 
            <style> .page_page{background: rgb(0,0,0,0); border-radius: 0.2rem; counter-reset: pagination; text-align: center; margin: 0px; } .page_page li{border: solid 1px #d6d6d6; border-radius: 0.2rem; color: #7d7d7d; text-decoration: none; text-transform: uppercase; display: inline-block; text-align: center; padding: 0.5rem 0.9rem; } </style>{{-- 分页样式 --}}


			    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
			    <div id="main" style="width: 300px;height:300px; user-select: none;background:color: yellow;"></div> 
				<div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
					<form action="/user" method="git">
                        {{ csrf_field() }}
	                    <div class="layui-input-inline"> 
	                        <input type="text" class="layui-input" name="search" value="{{ $search }}" placeholder="用户名">
	                    </div>
	                    <div class="layui-input-inline" style="width:80px">
	                        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
	                    </div>
					</form>

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
	                            用户名
	                        </th> 
	                        <th  style="text-align: center;">
	                            用户等级
	                        </th> 
	                      	<th style="text-align: center;">
	                            用户状态
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


	                    @foreach ($arr as $k)
	                    <tr>
	                        <td>
	                            <input type="checkbox" value="1" name="">
	                        </td>
	                        <td>
	                            {{$k -> id }}
	                        </td>
	                        <td>
	                            {{$k -> uname }}
	                        </td>
	                        <td>
	                            @switch($k -> grade)
	                           		@case(0)
	                           			普通用户
	                           		@break
	                           		@case(1)
	                           			vip 用户
	                           		@break
	                           		@case(2)
	                           			超级管理员
	                           		@break
	                           	@endswitch
	                        </td>
	                        <td> 
	                            @switch($k -> status) 
	                           		@case(0)
	                           			使用中
	                           		@break
	                           		@case(1)
	                           			已禁用
	                           		@break
	                           	@endswitch
	                        </td>

	                        <td>
	                            {{$k -> created_at }}
	                        </td> 
	                        <td class="td-manage">
	                            <a  class="list" title="编辑" href="user/{{$k -> id}}/edit" style="text-decoration:none">
	                                <i class="layui-icon"></i>
	                            </a>
	                            <a title="用户详情" href="javascript:;" onclick="level_edit('用户详情','level-edit.html','4','','300')" style="text-decoration:none">
	                                <i class="iconfont">&#xe70b;</i>
	                            </a>	                            
	                            <a title="修改密码" href="javascript:;" onclick="level_edit('修改密码','level-edit.html','4','','300')" style="text-decoration:none">
	                                <i class="iconfont">&#xe70b;</i>
	                            </a>
	                            <a title="删除" onclick="return confirm('确定要删除吗?')" href="user/delete/{{$k -> id }}" style="text-decoration:none">
	                                <i class="layui-icon"></i>
	                            </a>
	                        </td>
	                    </tr>  
					    @endforeach
	                </tbody>
	            </table>
                <xblock> 
	            <!-- 分页 -->
	            <span class="x-right"> <div class="page_page" style="padding-bottom: 0px;"> {{ $arr->links() }} </div> </span>

                </xblock>
        		<!-- 继承提示是否添加成功开始 -->
		        @section('issue')
		        <!-- <link rel="stylesheet" href="/boot/css/bootstrap.css">  -->
		        <script src="/boot/js/jquery.min.js"></script>
		        <script src="/boot/js/bootstrap.js"></script>
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
		        @endsection
				<!-- 继承提示是否添加结束 -->

	            <script>
			        // 基于准备好的dom，初始化echarts实例
			        var myChart = echarts.init(document.getElementById('main'));

			        // 指定图表的配置项和数据
			        var option = {
			            title: {
			                text: ' 用户统计 '
			            },
			            tooltip: {},
			            legend: {
			                data:['用户数量']
			            },
			            xAxis: {
			                data: ["普通用户","vip用户","超级管理员"]
			            },
			            yAxis: {},
			            series: [{
			                name: '用户数量',
			                type: 'bar',
			                data: [{{ $common }}, {{ $vip }}, {{$root}}]
			            }]
			        };

			        // 使用刚指定的配置项和数据显示图表。
			        myChart.setOption(option);
	            </script>
        @endsection