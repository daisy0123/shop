<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>可乐购商场</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="/Shop/Public/css/reset.css" />
        <link rel="stylesheet" href="/Shop/Public/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="/Shop/Public/css/shop.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="/Shop/Public/img/Public/favicon.ico" />
    </head>
    <body>
        <nav class="navbar navbar-default header-nav navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand navbar-icon" href="#">
            <img alt="Brand" src="/Shop/Public/img/Public/icon.png">
        </a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo U('Index/index');?>">商场首页</a></li>
                <li><a href="<?php echo U('User/login');?>">登录</a></li>
                <li><a href="<?php echo U('User/register');?>">注册</a></li>
            </ul>
        </div>
    </div>
</nav>

        <div class="container-all">
             <div class="container-fluid login_content">
    <div class="col-md-4 col-md-offset-7 login-form">
        <div class="login-title">
            <h4>
                用户登陆
            </h4>
        </div>
        <form class="form-horizontal" role="form" method="post" action="<?php echo U('User/doLogin');?>">
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">账号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="请填写有效的用户名">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name='password' placeholder="请填写有效的密码">
                </div>
            </div>          
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-2">
                    <input type="submit" class="btn btn-default userLogin" name='submitType' value="买家登录"/>
                </div>
                <div class="col-sm-offset-1 col-sm-2">
                    <input type="submit" class="btn btn-default salerLogin" name='submitType' value="商家登录"/>                  
                </div>
                <div class="col-sm-offset-1 col-sm-2">
                    <a class="btn btn-default register-a" href="<?php echo U('User/register');?>" role="button">去注册</a>
                </div>
            </div>
        </form>
    </div>
</div>

        </div>       
        <div class="footer">
    <p>&copy;copyright 丘玉秀 20141002345 于露露 20141002389</p>
    <a href="http://blog.csdn.net/qq_27597973">我的博客</a>
</div>
        <script src="/Shop/Public/js/jquery.js"></script>
         <script src="/Shop/Public/js/shop.js"></script>
        <script src="/Shop/Public/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>