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
             <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 search">       
        <div class="col-md-5 cenImg">
            <img src="/Shop/Public/img/Public/icon.jpg" />
        </div>
        <div class="col-md-7 form_search ">
            <form method="get" action="<?php echo U('Goods/goodslist/goodstype/查询');?>" class="form-inline" role="form">
                <div class="form-group col-md-4 input-group search_content">
                    <input type="text" class="form-control search_text" name="keyword"  placeholder="请输入商品关键字">
                </div>
                <input type="submit" class="btn btn-default submit_text" value="查看">
            </form>
        </div>
    </div>
</div>










    <div class="row navigation-row">       
    <div class="col-md-6 col-md-offset-4">
        <ul class="nav nav-tabs navigation" role="tablist">
            <li role="presentation"><a href="<?php echo U('Goods/goodsList/goodstype/护肤');?>">护肤</a></li>
            <li role="presentation"><a href="<?php echo U('Goods/goodsList/goodstype/卸妆');?>">卸妆</a></li>
            <li role="presentation"><a href="<?php echo U('Goods/goodsList/goodstype/彩妆');?>">彩妆</a></li>
            <li role="presentation"><a href="<?php echo U('Goods/goodsList/goodstype/身体');?>">身体</a></li>
            <li role="presentation"><a href="<?php echo U('Goods/goodsList/goodstype/头发');?>">头发</a></li>              
        </ul>
    </div>
</div>
    <div class="container goods-title">
        <p><?php echo ($goodstype); ?>系列商品</p>
    </div>
    <div class="container goods-list">
        <div class="container">      
            <?php if(is_array($goodslist)): $i = 0; $__LIST__ = $goodslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3">
                    <a href="<?php echo U('Goods/items/goodsid/'.$data['goodsid']);?>">
                        <div class="thumbnail">
                            <img src="<?php echo ($data['goodsimg00']); ?>" alt="">
                            <div class="caption goods_intro">
                                <a href="<?php echo U('Goods/items/goodsid/'.$data['goodsid']);?>" class="goods_name"><?php echo ($data['goodsname']); ?></a>
                                <p class="goods_account">价格：<b class="goods_price">￥<?php echo ($data['goodsprice']); ?></b></p>
                                <p class="goods_send">运费：<b class="goods_send_number">￥<?php echo ($data['goodssend']); ?></b></p>
                                <p class="goods_saler">店铺：
                                    <a href="#"><?php echo ($data['salername']); ?></a>
                                </p>
                                <p class="text-right"><a href="<?php echo U('Goods/items/goodsid/'.$data['goodsid']);?>" class="btn btn-primary goods_buy" role="button">立即购买</a></p>
                            </div>
                        </div>
                    </a>               
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="row pager">
            <nav>
                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
        </div>       
        <div class="footer">
    <p>&copy;copyright 丘玉秀 </p>
    <a href="http://blog.csdn.net/qq_27597973">我的博客</a>
</div>
        <script src="/Shop/Public/js/jquery.js"></script>
         <script src="/Shop/Public/js/shop.js"></script>
        <script src="/Shop/Public/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>