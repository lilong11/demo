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
           
           <!-- 统计图js 引入 -->
                


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
                                                
                                                @switch($v1->status)
                                                    @case(0)
                                                        
                                                    @break
                                                    @case(1)
                                                            <a href="/orders/fahuo/{{ $v1->oid }}"><button type="button" class="layui-btn">发货</button></a>
                                                    @break
                                                    @case(2)
                                                           
                                                    @break
                                                    @case(3)
                                                           
                                                    @break
                                                    @case(4)
                                                           
                                                    @break
                                                @endswitch
                                        </td>
                                                
                                       
                                </tr>        

                        @endforeach
                </tbody>
            </table>
            <script type="text/javascript" src="/js/echarts.min.js"></script> 
                <div id="main" style="width: 700px;height:400px; user-select: none;background:color: yellow;"></div> 

            <!-- 右侧内容框架，更改从这里结束 -->
          </div>

        </div>
        <!-- 右侧主体结束 -->
                <script>
                    // 基于准备好的dom，初始化echarts实例
                    var myChart = echarts.init(document.getElementById('main'));

                    // 指定图表的配置项和数据
                    var option = {
                        title: {
                            text: ' 订单统计 '
                        },
                        tooltip: {},
                        legend: {
                            data:['用户数量']
                        },
                        xAxis: {
                            data: ["等待支付","等待发货中","商品运输中","订单已完成","订单已取消"]
                        },
                        yAxis: {},
                        series: [{
                            name: '订单数量',
                            type: 'bar',
                            data: [{{ $a0 }}, {{ $a1 }}, {{$a2}}, {{$a3}}, {{$a4}}]
                        }]
                    };

                    // 使用刚指定的配置项和数据显示图表。
                    myChart.setOption(option);
                </script>

 @endsection