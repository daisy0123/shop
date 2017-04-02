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
            </div>
        </nav>
        <div class="container-all">
            <div class="container-fluid login_content">
                <div class="col-md-4 col-md-offset-7 login-form">
                    <div class="login-title">
                        <h4>
                            管理员登陆
                        </h4>
                    </div>
                    <form class="form-horizontal" role="form" method="post" action="<?php echo U('Index/doAdmin');?>">
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
                            <div class="col-sm-offset-9 col-md-3">
                                <input type="submit" class="btn btn-default" name='submitType' value="登录"/>                  
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
    <script src="/thinkPhpPro/Shop/Public/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>