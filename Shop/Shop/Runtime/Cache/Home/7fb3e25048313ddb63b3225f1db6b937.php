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
                <li><a href="<?php echo U('User/index');?>">商场首页</a></li>
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
    <div class="row">
    <div class="col-md-12 search">       
        <div class="col-md-5 cenImg">
            <img src="/thinkPhpPro/Shop/Public/img/Public/icon.jpg" />
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
            <li role="presentation"><a href="<?php echo U('User/goodsList/goodstype/护肤');?>">护肤</a></li>
            <li role="presentation"><a href="<?php echo U('User/goodsList/goodstype/卸妆');?>">卸妆</a></li>
            <li role="presentation"><a href="<?php echo U('User/goodsList/goodstype/彩妆');?>">彩妆</a></li>
            <li role="presentation"><a href="<?php echo U('User/goodsList/goodstype/身体');?>">身体</a></li>
            <li role="presentation"><a href="<?php echo U('User/goodsList/goodstype/头发');?>">头发</a></li>              
        </ul>
    </div>
</div>
    <div class="col-md-10 col-md-offset-1 items-container">
        <div class="media items-intro">
            <a class="media-left media-middle items-pic" href="<?php echo U('User/items/goodsid/'.$items['goodsid']);?>">
                <img src="<?php echo ($items['goodsimg00']); ?>" alt="...">
            </a>
            <div class="media-body items-text">
                <p class="items_Small"></p>
                <form method="post" action="<?php echo U('User/doBuy');?>">                   
                    <b class="items_name"><?php echo ($items['goodsname']); ?><p class="items_Small"><?php echo ($items['goodsintro']); ?></p></b>
                    <p class="items_price">售价：<span class="items_price_margin"><b class="items_big">￥<?php echo ($items['goodsprice']); ?></b></span></p>
                    <p class="items_send">运费：<b class="items_send_num">￥<?php echo ($items['goodssend']); ?></b></p>
                    <p class="items_count">数量：
                        <span class="items_count_content">
                            <span class="btn_num" id="num_more">+</span>
                            <input type="text" class="count_num" value="1" disabled=""/>
                            <span class="btn_num" id="num_less">-</span>
                        </span>
                    </p>
                    <p class="items_store">店铺：<a href="#"><?php echo ($items['salername']); ?></a></p>
                    <p>
                        <input type='text' name='goodsid' hidden="true" value="<?php echo ($items['goodsid']); ?>">
                        <input type='text' class="hgoodscount" name='goodscount' hidden="true" value="1">
                        <input type='text' class="hgoodsprice" name='goodsprice' hidden="true" value="<?php echo ($items['goodsprice']); ?>">
                        <input type='text' class="hgoodstotal" name='goodstotal' hidden="true" value="<?php echo ($items['goodsprice']); ?>">
                        <span class="items_oper"><a href="<?php echo U('User/doLove/itemsid/'.$items['goodsid']);?>">收藏</a></span>
                        <input type="submit" class="buybtn" name="buySubmit" value="加入购物车">
                        <input type="submit" class="buybtn" name="buySubmit" value="立即购买">
                    </p>
                </form>
            </div>
        </div>
        <div class="col-md-12 items-section">
            <div class="row items-section-title">
                <span class="items-section-picture items-section-active" id="items-section-picture">商品详情</span>
                <span class="items-section-comment" id="items-section-comment">用户评价</span>
            </div> 
            <div class="items-section-show">
                <div class="row items-section-picture-page">
                    <div class="items-section-pic">
                        <img src="<?php echo ($items['goodsimg01']); ?>" />
                        <img src="<?php echo ($items['goodsimg02']); ?>" />
                        <img src="<?php echo ($items['goodsimg03']); ?>" />
                        <img src="<?php echo ($items['goodsimg04']); ?>" />
                    </div>
                </div>
                <div class="row items-section-comment-page">
                    <div class="items-comments">
                        <?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$com): $mod = ($i % 2 );++$i;?><blockquote>
                                <p><?php echo ($com['content']); ?></p>
                                <footer>来自<cite title="Source Title"><?php echo ($com['username']); ?></cite></footer>
                            </blockquote><?php endforeach; endif; else: echo "" ;endif; ?>
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
    </div>
</div>
        </div>       
        <div class="footer">
    <p>&copy;copyright 丘玉秀</p>
    <a href="http://blog.csdn.net/qq_27597973">我的博客</a>
</div>
        <script src="/thinkPhpPro/Shop/Public/js/jquery.js"></script>
         <script src="/thinkPhpPro/Shop/Public/js/shop.js"></script>
        <script src="/thinkPhpPro/Shop/Public/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>