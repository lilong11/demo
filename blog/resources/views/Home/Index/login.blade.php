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
          <form class="form-signin" style="margin-top:20px;">
            
            <label for="inputEmail">用户名</label>
            <input type="text" class="form-control" name="uname" placeholder="用户名" required autofocus><br>
            <label for="inputEmail">密码</label>
            <input type="password" class="form-control" name="password" placeholder="密码"><br>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> 是否记住密码
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
          </form>

     </div>
</body>
</html>
