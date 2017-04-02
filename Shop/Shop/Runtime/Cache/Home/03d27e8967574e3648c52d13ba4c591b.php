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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($username); ?><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo U('User/saler');?>">个人中心</a></li>
                                <li><a href="<?php echo U('User/Logout');?>">退出 </a></li>           
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid update-page">
            <div class="col-md-10 col-md-offset-1 register-title">
                <h4>商品修改</h4>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <a class="col-md-2 update-pic" href="<?php echo U('Goods/items/goodsid/'.$items['goodsid']);?>">
                    <img src="<?php echo ($items['goodsimg00']); ?>" alt="...">
                </a>
                <div class="col-md-10">     
                    <form class="col-md-offset-2 form-horizontal" enctype='multipart/form-data' role="form" method="post" action="<?php echo U('User/updateGoods');?>">
                        <div class="form-group">
                            <label for="goodsname" class="col-sm-2 control-label">商品名称</label>
                            <div class="col-sm-5">
                                <input type="text" name="goodsid" hidden="true" value="<?php echo ($items['goodsid']); ?>">
                                <input type="text" class="form-control" id="goodsname" name="goodsname" value="<?php echo ($items['goodsname']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="goodsintro" class="col-sm-2 control-label">商品介绍</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="goodsintro" name="goodsintro" value="<?php echo ($items['goodsintro']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="goodssize" class="col-sm-2 control-label">商品规格</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="goodssize" name="goodssize" value="<?php echo ($items['goodssize']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="goodsprice" class="col-sm-2 control-label">商品价格</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="goodsprice" name="goodsprice" value="<?php echo ($items['goodsprice']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="goodscount" class="col-sm-2 control-label">商品数量</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="goodscount" name="goodscount" value="<?php echo ($items['goodscount']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="goodssend" class="col-sm-2 control-label">商品运费</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="goodssend" name="goodssend" value="<?php echo ($items['goodssend']); ?>">
                            </div>
                        </div>                 
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <input type="submit" class="btn btn-default csubmit" name="upsubmit" value="修改商品">
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