<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{$title or '用户操作'}}</title>
  <!-- 引入boorstrap 开始 -->

  <link rel="stylesheet" href="../boot/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top:200px;">
        <h2 class="text-center">{{$title or '用户操作'}}</h2>
            <form class="layui-form" action="/users" method="post">
                  {{ csrf_field() }}
                  @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <label for="inputEmail">用户名</label>
                  <input type="text" class="form-control" name="uname" value="{{ old('uname') }}" placeholder="用户名" required autofocus><br>
                  <label for="inputEmail">密码</label>
                  <input type="password" class="form-control" name="password" placeholder="密码"><br>
                  <label for="inputEmail">确认密码</label>
                  <input type="password" class="form-control" name="repassword" placeholder="确认密码"><br>
                  <label for="inputEmail">手机号</label>
                  <input type="text" class="form-control" name="tel" value="{{old('tel')}}" placeholder="手机号"><br>

                  <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
          </form>

     </div>
</body>
</html>
