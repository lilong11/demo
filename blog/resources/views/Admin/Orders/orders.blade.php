 @extends('Admin.layout.index')
        
        @section('title','订单处理')
        @section('content')

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../Admin_public/css/font.css">
        <link rel="stylesheet" href="../Admin_public/css/xadmin.css">
        <link rel="stylesheet" href="../Admin_public/css/swiper.min.css">
        <!--  -->

        <script type="text/javascript" src="../Admin_public/js/jquery.min.js"></script>
        <script type="text/javascript" src="../Admin_public/js/swiper.jquery.min.js"></script>
        <script src="../Admin_public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="../Admin_public/js/xadmin.js"></script>
        
         <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
           
            
            <div class="layui-btn">订单列表</div>
            <table class="layui-table" style="width:1000px">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            用户id
                        </th>
                        <th>
                            订单号
                        </th>
                        <th>
                            商品数量
                        </th>
                        <th>
                            总价格
                        </th>
                        
                        <th>
                            状态
                        </th>

                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($uname as $k=>$v)
                                
                        @endforeach

                        @foreach($orders as $k1=>$v1)
                                <tr>
                                        <td>{{ $v1->id }}</td>
                                        <td>{{ $uname[$k1] }}</td>
                                        <td>{{ $v1->oid }}</td>
                                        <td>{{ $v1->number }}</td>
                                        <td>{{ $v1->oprice }}</td>
                                        <td>
                                            @switch($v1->status)
                                                @case(0)
                                                        等待支付
                                                @break
                                                @case(1)
                                                        等待发货
                                                @break
                                                @case(2)
                                                        等待收货
                                                @break
                                                @case(3)
                                                        订单完成
                                                @break
                                                @case(4)
                                                        订单已取消
                                                @break
                                            @endswitch 
                                        </td>
                                        <td>
                                                <a href="/orders/orderdetail/{{ $v1->oid }}"><button type="button" class="layui-btn">查看详情</button></a>
                                                <a href="/orders/fahuo/{{ $v1->oid }}"><button type="button" class="layui-btn">发货</button></a>
                                        </td>
                                                
                                       
                                </tr>        

                        @endforeach
                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->


 @endsection