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
    <!-- 中部开始 -->
<!-- 显示错误 信息开始 -->
@if (count($errors) > 0)
    <div class="alert alert-danger" style="width:300px;background:red;margin-left:100px;margin-top:30px;text-align:center;border-radius:15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- 显示错误 信息结束 -->
<!-- 中部开始 -->
    <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/detailsgoods/edit" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="gid" value="{{ $details_data->gid }}">
                <input type="hidden" name="id" value="{{ $details_data->id }}">
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">商品简介</label>
                    <div class="layui-input-block">
                      <textarea placeholder="请输入内容" class="layui-textarea" name="content">{{ $details_data->content }}</textarea>
                    </div>
                </div>
                
                  <div class="layui-form-item">
                    <label class="layui-form-label">服装尺寸</label>
                    <div class="layui-input-block">
                        @foreach($goods_size as $k=>$v)
                      <input type="checkbox" name="gsize[]" title="{{ $v->gsizename }}" value="{{ $v->id }}"><div class="layui-unselect layui-form-checkbox"><span></span><i class="layui-icon"></i></div>
                      @endforeach
                    </div>
                  </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>商品细节图
                    </label>
                    <div class="layui-input-inline">
                       <input type="file" name="goodsDePic[]" multiple="multiple">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        修改
                    </button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
@endsection