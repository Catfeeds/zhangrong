<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>管理员登陆</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/admin/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/admin/signin.css" rel="stylesheet">
	<script src="/public/admin/ie-emulation-modes-warning.js"></script>

    
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form"  action="<?php echo U('Login/login');?>" method="post">
        <h2 class="form-signin-heading">管理员登陆</h2>
        <input type="text" class="form-control" placeholder="账号"   name="username">
        <input type="password" class="form-control" placeholder="密码" name="password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住我
          </label>
                  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登 陆</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/public/admin/ie10-viewport-bug-workaround.js"></script>
  

</body></html>