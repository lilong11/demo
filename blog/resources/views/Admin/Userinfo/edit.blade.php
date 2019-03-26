<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>详情信息修改</title>
      <link rel="stylesheet" href="/boot/css/bootstrap.css">
  </head>
  <body>
  <div class="container" style="margin-top:100px;">
        <form class="form-horizontal" action="/uinfo/{{$userinfo->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="PUT"> 

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">头像:</label>
            <div class="col-sm-10">
            <img src="/uploads/{{$userinfo->img}}" style="width:100px">
             <input type="file" name="img" value="{{$userinfo->img}}">
             <input type="submit" value="修改头像" />
            </div>
          </div>    

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">城市:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="city" value="{{$userinfo->city}}">
            </div>
          </div>     

         <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">年龄:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="age" value="{{$userinfo->age or '0' }}">
            </div>
          </div>    

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名:</label>
            <div class="col-sm-10">
              <select name="sex" class="form-control">
                  <option value="0">女</option>
                  <option value="1">男</option>
                  <option value="2" selected = "selected">保密</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">个性签名:</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="sign" rows="3">{{$userinfo->sign}}</textarea>
            </div>
          </div> 

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-warning center-block" style="width:600px; left:100px">修改</button>
            </div>
          </div>
        </form>
    </div>
  </body>
  </html>  