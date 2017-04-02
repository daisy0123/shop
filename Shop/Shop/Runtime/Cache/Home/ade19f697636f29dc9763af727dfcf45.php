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
                <p>选择收货地址</p>
            </div>  
            <div class="col-md-12 shopList-table">   
                <form method="post" action="<?php echo U('User/addSelect');?>">
                    <table class="row table">
                        <tr>
                            <th>
                                选择
                            </th>
                            <th>
                                收货人姓名
                            </th>
                            <th>
                                收货人详细地址
                            </th>
                            <th>
                                收货人号码
                            </th>
                            <th>
                                收货人邮政编码
                            </th>
                        </tr>
                        <?php if(is_array($addressSele)): $i = 0; $__LIST__ = $addressSele;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$add): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <input type='checkbox' name='addressid' class='addresscheck' value=" <?php echo ($add['useraddid']); ?>"/>
                                </td>
                                <td>
                                    <?php echo ($add['addressname']); ?>
                                </td>
                                <td>
                                    <?php echo ($add['addressphone']); ?>
                                </td>
                                <td>
                                    <?php echo ($add['addressadd']); ?>
                                </td>
                                <td>
                                    <?php echo ($add['addressnum']); ?>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="col-md-12 addressSele-footer">
                        <div class="row empty-area"></div>
                        <div class="money-list">                       
                            <p class="text-right">
                                <input type="submit" class="btn btn-default" name="addressSub" value="确认">
                            </p>
                        </div>                  
                    </div>
                </form>
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