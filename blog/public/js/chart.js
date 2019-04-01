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