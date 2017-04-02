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
                <li><a href="<?php echo U('User/buycart');?>">我的购物车</a></li>             
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($username); ?><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                         <li><a href="<?php echo U('User/buyer');?>">个人中心</a></li>
                        <li><a href="<?php echo U('User/Logout');?>">退出 </a></li>           
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>






        <div class="container-all">
             <div class="container-fluid">
    <div class="col-md-10 col-md-offset-1 register-title">
        <h4>评价商品</h4>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="media items-intro">
            <a class="media-left media-middle comment-pic" href="<?php echo U('User/items/goodsid/'.$items['goodsid']);?>">
                <img src="<?php echo ($items['goodsimg00']); ?>" alt="...">
            </a>
            <div class="media-body items-text">
                <p class="items_Small"></p>                
                <b class="items_name"><?php echo ($items['goodsname']); ?><p class="items_Small"><?php echo ($items['goodsintro']); ?></p></b>
                <p class="items_price">价格：<b class="items_send_num">￥<?php echo ($items['goodsprice']); ?></b></p>
                <p class="items_price">规格：<b class="items_send_num"><?php echo ($items['goodssize']); ?></b></p>
                <p class="items_send">运费：<b class="items_send_num">￥<?php echo ($items['goodssend']); ?></b></p>
                <p class="items_count">数量： <b class="items_send_num"><?php echo ($items['goodscount']); ?></b></p>
                <p class="items_count">总额： <b class="items_send_num"><?php echo ($items['goodstotal']); ?></b></p>
                <p class="items_store">店铺：<a href="#"><?php echo ($items['salername']); ?></a></p>               
            </div>
        </div>
        <div class="col-md-12">     
            <form class="commentForm"  method="post" action="<?php echo U('User/doComment');?>" >
                <blockquote>                    
                    <b><?php echo ($items['username']); ?>:</b>       
                    <input type="text" value="<?php echo ($items['shoplistid']); ?>" name='shoplist' hidden="true">
                    <textarea class="form-control" name="comment" rows="5"></textarea>
                    <p class="text-right"><input type="submit" class="btn btn-default csubmit" name="csubmit" value="提交评论"></p> 
                </blockquote>
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