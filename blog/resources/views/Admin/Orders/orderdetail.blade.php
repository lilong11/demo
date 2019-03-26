 @extends('Admin.layout.index')
        
        @section('title','订单详情')
        @section('content')

        <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/Admin_public/css/font.css">
        <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="/Admin_public/css/swiper.min.css">
        <!--  -->

        <script type="text/javascript" src="/Admin_public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/Admin_public/js/swiper.jquery.min.js"></script>
        <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>
        
         <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
           
            
            <div class="layui-btn">订单详情</div>
            <table class="layui-table" style="width:1000px">
                <thead>
                    <tr>
                        <th>
                            订单号
                        </th>
                        <th>
                            商品名称
                        </th>
                        <th>
                            商品图片
                        </th>
                        <th>
                            数量
                        </th>
                        <th>
                            下单时间
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                        @foreach($goods as $k1=>$v1)

                        @endforeach

                        @foreach($orderdetail as $k=>$v)
                        <tr>
                            <td> {{ $v->oid }} </td>
                            <td> {{ $goods[$k]->gname }} </td>
                            <td><img src="/uploads/{{ $goods[$k]->pic }}" alt="" width="80px" height="80px"></td>
                            <td> {{ $v->gnum }} </td>
                            <td> {{ $v->created_at }} </td>
                            
                           
                           
                        
                        </tr>
                        @endforeach

                        
                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->


 @endsection