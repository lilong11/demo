@extends('admin.layout.index')
@section('content')
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/Admin_public/css/font.css">
<link rel="stylesheet" href="/Admin_public/css/xadmin.css">
<!--可无视-->
<!-- <link rel="stylesheet" type="text/css" href="/Admin_public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Admin_public/css/body.css">
 --><!--主要样式-->
<!-- <link rel="stylesheet" href="/Admin_public/css/demo.css">
<link rel="stylesheet" href="/Admin_public/src/css/dialog.css"> -->

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
            <xblock><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
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
                            服装颜色
                        </th>
                        <th>
                            服装尺寸
                        </th>
                        <th>
                            服装图片
                        </th>
                        <th>
                            服装简介
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>                
                @foreach($details_goods as $key=>$value)
                <tbody>
                    <tr>                        
                        <td>
                            {{ $id++ }}
                        </td>
                        <p style="display:none">{{ $gid++ }}</p>
                        <td>
                            @foreach($gcolor_datas as $k=>$v)
                                @if($k == $gid)
                                @foreach($v as $kk=>$vv)
                                    {{ $vv->gcolorname }}<br/>
                                @endforeach
                                @endif
                            @endforeach
                        </td>
                        <td >
                            @foreach($gsize_datas as $k=>$v)
                                @if($k == $gid)
                                @foreach($v as $kk=>$vv)
                                    {{ $vv->gsizename }}<br/>
                                @endforeach
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($goodsDePic as $k=>$v)
                                @if($k == $gid)
                                @for($i = 0;$i<count($v);$i++)
                                <img src="{{ $v[$i] }}" alt="" width="80px" height="80px"> 
                                @endfor
                                @endif
                            @endforeach
                            
                        </td>
                        <td class="td-status">
                            <!-- <span class="layui-btn layui-btn-normal layui-btn-mini" id="confirm">
                                点击查看
                            </span> -->
                            {{ $value->content }}
                        </td>
                        <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                {{ $value->status == 1 ? '已启用' : '已停用' }}
                            </span>

                            <a href="/status/detailsgoods?id={{ $value->id }}">修改</a>
                        </td>
                        <td class="td-manage">
                            <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="" title="">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <a title="编辑" href="/detailsgoods/show?id=">
                                <i class="layui-icon">&#xe642;</i>
                            </a>                                       
                            <form action="/detailsgoods/{{ $value->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="id" value="{{ $value->id }}">
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
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/Admin_public/src/jquery.dialog.js"></script>
@foreach($details_goods as $key=>$value)
<script>
    // 确认框：标题+提示语+描述文本+确认+取消
    
    $('#confirm').click(function() {
      $.sendConfirm({
        title: '商品描述',
        
        desc: {{ $value->content }},
        
        button: {
          confirm: '确认',
          cancel: '取消'
        },
        onConfirm: function() {
          console.log('点击确认！');
        },
        onCancel: function() {
          console.log('点击取消！');
        },
        onClose: function() {
          console.log('点击关闭！');
        }
      });
    });
</script>
@endforeach
@endsection
