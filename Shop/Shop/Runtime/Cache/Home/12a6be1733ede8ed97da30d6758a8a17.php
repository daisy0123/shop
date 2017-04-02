<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>可乐购商场</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="/thinkPhpPro/Shop/Public/css/reset.css" />
        <link rel="stylesheet" href="/thinkPhpPro/Shop/Public/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="/thinkPhpPro/Shop/Public/css/shop.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="/thinkPhpPro/Shop/Public/img/Public/favicon.ico" />
    </head>
    <body>
        <nav class="navbar navbar-default header-nav navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand navbar-icon" href="#">
            <img alt="Brand" src="/thinkPhpPro/Shop/Public/img/Public/icon.png">
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
             <div class="container-fluid">
    <div class="col-md-10 col-md-offset-1 register-title">
            <h4>注册</h4>
        </div>
    <div class="col-md-5 col-md-offset-3">     
        <form class="form-horizontal registerform" role="form" method="post" action="<?php echo U('User/doRegister');?>" >
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="请输入有效的用户名">
                </div>
            </div>
            <div class="form-group">
                <label for="phonenumber" class="col-sm-2 control-label">手机号码</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="请输入有效的手机号码" maxlength="11">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">邮箱地址</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="请输入有效的邮箱地址">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">性别</label>          
                <div class="radio">
                    &emsp;
                    <label>
                        <input type="radio" name="sex" value="男" checked>男
                    </label>
                    &emsp;
                    <label>
                        <input type="radio" name="sex"  value="女">女
                    </label>
                </div>               
            </div>
             <div class="form-group">
                <label for="address" class="col-sm-2 control-label">住址</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="请输入真实的住址">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group">
                <label for="confirm" class="col-sm-2 control-label">确认密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="confirm" name="confirm" placeholder="请再次输入密码">
                </div>
            </div>
            <div class="form-group register-submit">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-default userRegister" name='submitType' value="买家注册"/>
                    &emsp;
                    <input type="submit" class="btn btn-default salerRegister" name='submitType' value="商家注册"/>
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
        <script src="/thinkPhpPro/Shop/Public/js/jquery.js"></script>
         <script src="/thinkPhpPro/Shop/Public/js/shop.js"></script>
        <script src="/thinkPhpPro/Shop/Public/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>