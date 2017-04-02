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
             <div class="container">
    <div class="row buyer-mess-title">
        <a href="<?php echo U('User/buyer');?>">
            <img src="/Shop/Public/img/buyer/menberhome.png">
        </a>
    </div>
    <div class="row buyer-mess-con">
        <div class="col-md-2 menber-message-slider">
            <div class="row menber-message-pic">
                <img src="<?php echo ($data['userimg']); ?>">
            </div>
            <span class="row menber_message_signal">
                个人信息管理
            </span>
            <ul class="row">
                <li class="menber_active"><span class="menber_message_first">账号信息</span></li>
                <li><span class="menber_message_second">商品收藏</span></li>
                <li><span class="menber_message_third">订单信息</span></li>
                <li><span class="menber_message_forth">地址查看</span></li>
                <li><span class="menber_message_fifth">地址添加</span></li>
                <li><span class="menber_message_sixth">修改密码</span></li>
            </ul>
        </div>
        <div class="col-md-10 menber_message_content">
            <div class="menber_message_first_page">
                <form class="col-md-offset-2 form-horizontal buyer-from"  enctype='multipart/form-data' role="form" method="post" action="<?php echo U('User/doUpdate');?>">
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">用户名</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?php echo ($data['username']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber" class="col-sm-2 control-label">手机号码</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="" value="<?php echo ($data['phonenum']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">邮箱地址</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo ($data['email']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-2 control-label">住址</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="address" name="address" placeholder="" value="<?php echo ($data['address']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="picture" class="col-sm-2 control-label">上传头像(jpg/png)</label>
                        <div class="col-sm-5">
                            <input type="file" id="picture" name="photo">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <input type="text" name="submittype" value="买家" hidden="true">
                            <input type="submit" class="btn btn-default" name="upsubmit" value="确认修改">
                        </div>
                    </div>
                </form>
            </div>
            <div class="menber_message_second_page table_page_show">
                <table>
                    <tr>
                        <th>商品名称</th>
                        <th>商品规格</th>
                        <th>商品价格</th>
                        <th>商品分类</th>                        
                        <th>店铺名称</th>
                        <th>详细信息</th>
                    </tr>
                    <?php if(is_array($goodslove)): $i = 0; $__LIST__ = $goodslove;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$glove): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($glove['goodsname']); ?></td>
                            <td><?php echo ($glove['goodssize']); ?></td>
                            <td>￥<?php echo ($glove['goodsprice']); ?></td>
                            <td><?php echo ($glove['goodstype']); ?></td>                         
                            <td><?php echo ($glove['salername']); ?></td>
                            <td>
                                <a href="<?php echo U('Goods/items/goodsid/'.$glove['goodsid']);?>">详细信息</a>&emsp;
                                <a href="<?php echo U('User/doLoveDelect/goodslovesid/'.$glove['goodsloveid']);?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>               
                </table>
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
            <div class="menber_message_third_page table_page_show">
                <table>
                    <tr>
                        <th>商品名称</th>
                        <th>商品规格</th>
                        <th>商品单价</th>
                        <th>商品数量</th>
                        <th>商品总价</th>
                        <th>店铺名称</th>
                        <th>操作</th>
                    </tr>
                    <?php if(is_array($shopsuccess)): $i = 0; $__LIST__ = $shopsuccess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gsussess): $mod = ($i % 2 );++$i;?><tr>
                            <td><a href="<?php echo U('Goods/items/goodsid/'.$gsussess['goodsid']);?>"><?php echo ($gsussess['goodsname']); ?></a></td>
                            <td><?php echo ($gsussess['goodssize']); ?></td>
                            <td>￥<?php echo ($gsussess['goodsprice']); ?></td>
                            <td><?php echo ($gsussess['goodscount']); ?></td>    
                            <td><?php echo ($gsussess['goodstotal']); ?></td> 
                            <td><?php echo ($gsussess['salername']); ?></td>
                            <td>
                                <a href="<?php echo U('User/message/shoplistid/'.$gsussess['shoplistid']);?>">订单详情</a>&emsp;
                                <a href="<?php echo U('User/comment/shoplistid/'.$gsussess['shoplistid']);?>">评价商品</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
                </table>
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
            <div class="menber_message_forth_page table_page_show">
                <table>
                    <tr>
                        <th>收货人姓名</th>
                        <th>收货人号码</th>
                        <th>收货人地址</th>
                        <th>收货人邮政编码</th>
                        <th>操作</th>
                    </tr>
                    <?php if(is_array($addressShow)): $i = 0; $__LIST__ = $addressShow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$address): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($address['addressname']); ?></td>
                            <td><?php echo ($address['addressphone']); ?></td>
                            <td><?php echo ($address['addressadd']); ?></td>
                            <td><?php echo ($address['addressnum']); ?></td>                                                
                            <td><a href="<?php echo U('User/doDelect/addressid/'.$address['useraddid']);?>">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>   
                </table>
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
            <div class="menber_message_fifth_page">
                <form class="col-md-offset-2 form-horizontal buyer-from" role="form" action="<?php echo U('User/doAddress');?>" method="post">
                    <div class="form-group">
                        <label for="addname" class="col-sm-2 control-label">收货人姓名</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="addname" name="addname" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addaddress" class="col-sm-2 control-label">收货人地址</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="addaddress" name="addaddress" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addphone" class="col-sm-2 control-label">收货人号码</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="addphone" name="addphone" placeholder="">
                        </div>
                    </div>         
                    <div class="form-group">
                        <label for="addnum" class="col-sm-2 control-label">邮政编码</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="addnum" name="addnum" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <input type="submit" class="btn btn-default" name="addsubmit" value="确认添加">
                        </div>
                    </div>
                </form>
            </div>
            <div class="menber_message_sixth_page">
                <form class="col-md-offset-2 form-horizontal buyer-from passwordForm" role="form"  action="<?php echo U('User/doPassword');?>" method="post">
                    <div class="form-group">
                        <label for="oldpass" class="col-sm-2 control-label">旧密码</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="oldpass" name="oldpass" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newpass" class="col-sm-2 control-label">新密码</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="newpass" name="newpass" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conpass" class="col-sm-2 control-label">确认密码</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="conpass" name="conpass" placeholder="">
                        </div>
                    </div>                     
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <input type="text" name="submittype" value="买家" hidden="true">
                            <input type="submit" class="btn btn-default passwordSubmit" name="upsubmit" value="确认修改">
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