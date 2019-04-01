	 <!-- 引入内容模块 -->
 @extends('Admin.layout.index')
        @section('content')
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
            <link rel="stylesheet" href="/Admin_public/css/font.css">
            <link rel="stylesheet" href="/Admin_public/css/xadmin.css"> 
            <link rel="stylesheet" href="/Admin_public/css/swiper.min.css"> 
            <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css"> 
            <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
            <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
            <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script> 
                <!-- 统计图js 引入 -->
                <script type="text/javascript" src="/js/echarts.min.js"></script> 
                 <fieldset class="layui-elem-field layui-field-title site-title">
                      <legend><a name="default">信息统计</a></legend>
                 </fieldset>
                <div class="layui-table">
                     <div id="main" style="width: 300px;height:300px; user-select: none;background:color: yellow;"></div> 
                    <div id="goods" style="width: 300px;height:300px; user-select: none;background:color: yellow;position: absolute;right: 50px;top:60px"></div> 
                </div>
             <table class="layui-table">
                <thead>
                    <tr>
                        <th>统计</th>
                        <th>资讯库</th>
                        <th>图片库</th>
                        <th>产品库</th>
                        <th>用户</th>
                        <th>管理员</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>用户管理</td>
                        <td>92</td>
                        <td>9</td>
                        <td>0</td>
                        <td>8</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>问题管理</td>
                        <td>92</td>
                        <td>9</td>
                        <td>0</td>
                        <td>8</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>文章管理</td>
                        <td>92</td>
                        <td>9</td>
                        <td>0</td>
                        <td>8</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>  



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
            data: [{{ $vip }}, {{ $common }}, {{ $root }}]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>
<script>

        echarts.init(document.getElementById('goods')).setOption({


            series: {
                type: 'pie',
                data: [
                    {name: '不显示问题', value: {{ $forbidden }} },
                    {name: '已解决的问题', value: {{ $reveal }} },
                    {name: '待处理问题', value: {{ $dispose }} }
                ]
            }
        });

</script>

        @endsection