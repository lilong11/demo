<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>优惠券添加</title>
      <link rel="stylesheet" href="/boot/css/bootstrap.css">
  </head>
  <body>
  <div class="container" style="margin-top:100px;">
        <form class="form-horizontal" action="/ticket" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">优惠券减价:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="city">
            </div>
          </div>     

        <div class="layui-form-item">
            <label class="col-sm-2 control-label">商品分类</label>
                <div class="layui-input-inline">
                <select class="form-control" style="width:920px; left:100px" name="tid" value="{{ old('tid') }}">
                     @foreach($type_data as $k=>$v)
                        <option value="{{ $v->id }}">{{ $v->tname }}</option>
                  @endforeach
                </select>
            </div>
        </div>
   

         <!--  <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">商品:</label>
            <div class="col-sm-10">
              <select name="sex" class="form-control">
                  <option value="0">女</option>
                  <option value="1">男</option>
                  <option value="2" selected = "selected">保密</option>
              </select>
            </div>
          </div> -->
 

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-warning center-block" style="width:600px; left:100px">添加</button>
            </div>
          </div>
        </form>
    </div>
  </body>
  </html>  