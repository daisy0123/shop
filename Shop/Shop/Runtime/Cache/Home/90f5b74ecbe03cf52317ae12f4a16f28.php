<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>管理员管理</title>
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
            <div class="container-fluid">
                <div class="admin-select row">
    <h3 class='text-center'>管理员管理</h3>
    <div class="col-md-6 col-md-offset-3">                        
        <div class="col-md-3"><button type="button" class="btn btn-default" id="first-part">买家修改</button></div>
        <div class="col-md-3"><button type="button" class="btn btn-default second-part" id="second-part">买家修改</button></div>
        <div class="col-md-3"><button type="button" class="btn btn-default third-part" id="third-part">商品修改</button></div>
        <div class="col-md-3"><a href="<?php echo U('Index/admin');?>"><button type="button" class="btn btn-default third-part">回到管理页面</button></a></div>
    </div>
</div>
<div class="row part-page">
    <div class="first-part-page">
        <form class="col-md-offset-3 form-horizontal" enctype='multipart/form-data' role="form" method="post" action="<?php echo U('Index/doAdminUp');?>">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">买家昵称</label>
                <div class="col-sm-5">
                    <input type="text" name="userid" hidden="true" value="<?php echo ($user['userid']); ?>">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo ($user['username']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">买家电话号码</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo ($user['phonenum']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">买家邮箱</label>
                <div class="col-sm-5">
                    <input type="eamil" class="form-control" id="email" name="email" value="<?php echo ($user['email']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">买家性别</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="sex" name="sex" value="<?php echo ($user['sex']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">买家地址</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo ($user['address']); ?>">
                </div>
            </div>
             <div class="form-group">
                <label for="password" class="col-sm-2 control-label">买家密码</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo ($user['password']); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <input type="text" name="type" value="买家" hidden="true">
                    <input type="submit" class="btn btn-default csubmit" name="adsubmit" value="确认">
                </div>
            </div>
        </form>
    </div>
    <div class="second-part-page">
        <form class="col-md-offset-3 form-horizontal" enctype='multipart/form-data' role="form" method="post" action="<?php echo U('Index/doAdminUp');?>">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">商家昵称</label>
                <div class="col-sm-5">
                    <input type="text" name="salerid" hidden="true" value="<?php echo ($saler['salerid']); ?>">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo ($saler['salername']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">商家买家电话号码</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo ($saler['salerphone']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">商家邮箱</label>
                <div class="col-sm-5">
                    <input type="eamil" class="form-control" id="email" name="email" value="<?php echo ($saler['saleremail']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">商家性别</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="sex" name="sex" value="<?php echo ($saler['salersex']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">商家地址</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo ($saler['saleraddress']); ?>">
                </div>
            </div>
             <div class="form-group">
                <label for="password" class="col-sm-2 control-label">商家密码</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo ($saler['salerpassword']); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <input type="text" name="type" value="商家" hidden="true">
                    <input type="submit" class="btn btn-default csubmit" name="adsubmit" value="确认">
                </div>
            </div>
        </form>
    </div>
    <div class="third-part-page">
        <form class="col-md-offset-3 form-horizontal" enctype='multipart/form-data' role="form" method="post" action="<?php echo U('Index/doAdminUp');?>">
            <div class="form-group">
                <label for="goodsname" class="col-sm-2 control-label">商品名称</label>
                <div class="col-sm-5">
                    <input type="text" name="goodsid" hidden="true" value="<?php echo ($goods['goodsid']); ?>">
                    <input type="text" class="form-control" id="goodsname" name="goodsname" value="<?php echo ($goods['goodsname']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="goodsintro" class="col-sm-2 control-label">商品介绍</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="goodsintro" name="goodsintro" value="<?php echo ($goods['goodsintro']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="goodssize" class="col-sm-2 control-label">商品规格</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="goodssize" name="goodssize" value="<?php echo ($goods['goodssize']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="goodsprice" class="col-sm-2 control-label">商品价格</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="goodsprice" name="goodsprice" value="<?php echo ($goods['goodsprice']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="goodscount" class="col-sm-2 control-label">商品数量</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="goodscount" name="goodscount" value="<?php echo ($goods['goodscount']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="goodssend" class="col-sm-2 control-label">商品运费</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="goodssend" name="goodssend" value="<?php echo ($goods['goodssend']); ?>">
                </div>
            </div>                 
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <input type="text"  name="type" value="商品" hidden="true">
                    <input type="submit" class="btn btn-default csubmit" name="adpusubmit" value="确认">
                </div>
            </div>
        </form>
    </div>
   
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