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
             <div class="container-fluid buycart-container">
    <div class="col-md-10 col-md-offset-1 goods-contain">
        <div class="row buycart-progress">
            <p class="text-right progress-sinal">
                <i class="fa fa-circle-o fa-2x sinal-active" aria-hidden="true"></i> 
                <img src="/Shop/Public/img/buycart/line-active.png">
                <i class="fa fa-circle-o fa-2x sinal-active" aria-hidden="true"></i>
                <img src="/Shop/Public/img/buycart/line.png">
                <i class="fa fa-circle-o fa-2x" aria-hidden="true"></i>
            </p>
            <p class="text-right progress-sinal-text">
                <span class="sinal-active">我的购物车</span> 
                <span class="sinal-active">提交订单</span> 
                <span>选择支付方式</span>          
            </p>
        </div>
        <div class="col-md-10 col-md-offset-1 shopList-content">
            <div class="col-md-12">
                <a href="<?php echo U('User/addressSele');?>">选择收货地址</a>
            </div>           
            <div class="col-md-4 address-selection">
                <p>收货人：<b><?php echo ($data['addressname']); ?></b></p>
                <p>收货人号码：<b><?php echo ($data['addressphone']); ?></b></p>
                <p>收获地址：<b><?php echo ($data['addressadd']); ?></b></p>
                <p>邮政编码：<b><?php echo ($data['addressnum']); ?></b></p>
            </div>
            <div class="col-md-12">
                <a href="">确认商品信息</a>
            </div>  
            <div class="col-md-12 shopList-table">               
                <table class="row table">
                    <tr>
                        <th>
                            商品信息
                        </th>
                        <th>
                            商品单价
                        </th>
                        <th>
                            商品数量
                        </th>
                        <th>
                            商品运费
                        </th>
                        <th>
                            商品总额
                        </th>
                    </tr>
                    <?php if(is_array($shoplist)): $i = 0; $__LIST__ = $shoplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                                <?php echo ($shop['goodsname']); ?>              
                            </td>
                            <td>
                                <?php echo ($shop['goodsprice']); ?>
                            </td>
                            <td>
                                <?php echo ($shop['goodscount']); ?>
                            </td>
                            <td class="goodsend">
                                <?php echo ($shop['goodssend']); ?>
                            </td>
                            <td class="goodtotal">
                                <?php echo ($shop['goodstotal']); ?>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
                <div class="col-md-12 shopList-footer">
                    <div class="row empty-area"></div>
                    <form method="post" action="<?php echo U('User/repay');?>">
                        <div class="money-list">
                            <p class="text-right">
                                商品总额：
                                <input type="text" class="moneytotal" name="moneytotal" value="<?php echo ($shop['goodstotal']); ?>"  disabled>
                            </p>
                            <p class="text-right">
                                运&emsp;&emsp;费：
                                <input type="text" class="moneysend" name="moneysend" value="<?php echo ($shop['goodssend']); ?>" disabled>
                            </p>
                            <p class="text-right">
                                应付金额：
                                <input type="text" class="money" name="money" value="" disabled>
                            </p>
                            <p class="text-right">
                                <a href="<?php echo U('User/buycart');?>">
                                    返回购物车
                                </a>&emsp;        
                                <input type="text" name="useraddress" value="<?php echo ($data['useraddid']); ?>"  hidden>
                                <input type="text" class="moneytotal" name="moneytotal" value="<?php echo ($shop['goodstotal']); ?>"  hidden>
                                <input type="text" class="moneysend" name="moneysend" value="<?php echo ($shop['goodssend']); ?>" hidden>
                                <input type="text" class="money" name="money" value="" hidden>    
                                <input type="submit" class="btn btn-default" name="shopListSub" value="提交订单">
                            </p>
                        </div>   
                    </form>               
                </div>
            </div>
        </div>            

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