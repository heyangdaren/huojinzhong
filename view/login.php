<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">用户登录</h3>
        </div>
        <div class="panel-body">
            <form action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" id="username" class="form-control" value="" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-10">
                        <input type="text" name="password" id="password" class="form-control" value="" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="code" class="col-sm-2 control-label">验证码</label>
                    <div class="col-sm-10">
                        <input type="text" name="code" id="code" class="form-control" value="" required="required">
                        <img src="?c=index/code" alt="" onclick="this.src='?c=index/code&'+Math.random()">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">立即登录</button>
                        <a href="./">返回首页</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>