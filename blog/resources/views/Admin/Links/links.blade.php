 @extends('Admin.layout.index')
        
        @section('title','友情链接')
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
           
            
            <div class="layui-btn">友情链接列表</div>
            <table class="layui-table" style="width:1000px">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            链接名称
                        </th>
                        <th>
                            链接地址
                        </th>
                        <th>
                            图片
                        </th>
                        <th>
                            添加时间
                        </th>
                        
                        
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($links as $k=>$v)
                    <tr>
                        <td>{{ $v->id }}</td>
                            
                        
                        <td>{{ $v->lname }}</td>
                            
                        
                        <td>{{ $v->lurl }}</td>
                            
                        
                        <td>
                                <img src="/uploads/{{ $v->limg }}" width="100" height="100" style="border-radius:8px"> 
                        </td>
                           
                        <td>{{ $v->created_at }}</td>
                       
                        <td>
                            <form action="links/{{ $v->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" value="删除" class="layui-btn layui-btn-danger" 
                                    onclick="return confirm('确定要删除吗?')" > 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
        
        <!-- @include('Home.Tongji.tongji') -->
        @endsection
