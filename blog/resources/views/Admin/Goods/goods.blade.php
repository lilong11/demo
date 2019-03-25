@extends('admin.layout.index')
@section('content')
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/Admin_public/css/font.css">
<link rel="stylesheet" href="/Admin_public/css/xadmin.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
<script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>  

        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="" >
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
                      <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><a href="/goods/create/"><button class="layui-btn" ><i class="layui-icon">&#xe608;</i>添加</button></a><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            @if (session('success'))
                <div class="btn btn-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="btn btn-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            商品名
                        </th>
                        <th>
                            商品图片
                        </th>
                        <th>
                            商品价格
                        </th>
                        <th>
                            商品数量
                        </th>
                        <th>
                            商品描述
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>                
                @foreach($goods_data as $k=>$v)
                <tbody>
                    <tr>                        
                        <td>
                            {{ $id++ }}
                        </td>
                        <td>
                            <u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')">
                                {{ $v->gname }}
                            </u>
                        </td>
                        <td>
                            <img src="/uploads/{{ $v->pic }}" alt="" width="80px" height="80px"> 
                        </td>
                        <td >
                            {{ $v->price }}
                        </td>
                        <td >
                            {{ $v->goodsNum }}
                        </td>
                        <td>
                            <a href="/detailsgoods"><button class="layui-btn" ><i class="layui-icon"></i>查看</button></a>
                            <a href="/detailsgoods/create?id={{ $v->id }}"><button class="layui-btn" ><i class="layui-icon"></i>添加</button></a>
                        </td>
                        <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                {{ $v->goodsState == 1 ? '已启用' : '已停用' }}
                            </span>

                            <a href="/status/goods?id={{ $v->id }}">修改</a>
                        </td>
                        <td class="td-manage">
                            <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="" title="">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <a title="编辑" href="/goods/show?id={{ $v->id }}">
                                <i class="layui-icon">&#xe642;</i>
                            </a>                                       
                            <form action="/goods/{{ $v->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="pic" value="{{ $v->pic }}">
                                <input type="submit" value="删除" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
@endsection