 <!-- 引入左边模块 -->
 @extends('Admin.layout.index')
        @section('content')
				<div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">日期范围</label>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
                    </div>
                  </div>
                </div>
                <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button><button class="layui-btn" onclick="level_add('添加用户','user/create','','600','300')"><i class="layui-icon"></i>添加</button><span class="x-right">共有数据：{{ $arr->links() }} 条</span></xblock>
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
	                            用户名
	                        </th>
	                      	<th>
	                            用户状态
	                        </th>
							<th>
	                            添加时间
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
	                            {{$k -> tel }}
	                        </td>
	                        <td>
	                            {{$k -> created_at }}
	                        </td>
	                        <td>
	                            {{$k -> updated_at }}
	                        </td>
	                        <td class="td-manage">
	                            <a title="编辑" href="user/{{$k -> id}}/edit" style="text-decoration:none">
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
        @endsection