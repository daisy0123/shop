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
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner  pic-slide" role="listbox">
                <div class="item active">
                    <img src="/thinkPhpPro/Shop/Public/img/index/index_pic.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="/thinkPhpPro/Shop/Public/img/index/index_pic1.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="/thinkPhpPro/Shop/Public/img/index/index_pic2.jpg" alt="...">                 
                </div>
                <div class="item">
                    <img src="/thinkPhpPro/Shop/Public/img/index/index_pic3.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="/thinkPhpPro/Shop/Public/img/index/index_pic4.jpg" alt="...">                 
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div> 
    <div class="row">
        <div class="col-md-12 good-recommend">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/canmake棉花糖粉饼.jpg" alt="...">                           
                        </a>                        
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/marcheur.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/ohbaby.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/城野医生水.jpg" alt="...">
                        </a>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/canmake棉花糖粉饼.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/marcheur.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/ohbaby.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" src="/thinkPhpPro/Shop/Public/img/index/commend/城野医生水.jpg" alt="...">
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-12 see_more">
                <a href="<?php echo U('User/goodsList/goodstype/护肤');?>">查看更多</a>
                <img src="/thinkPhpPro/Shop/Public/img/index/more_icon.png" />
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