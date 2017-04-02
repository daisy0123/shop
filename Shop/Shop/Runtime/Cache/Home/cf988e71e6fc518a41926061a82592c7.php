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
                <a class="navbar-brand navbar-icon" href="<?php echo U('User/saler');?>">
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
        <div class="container-all">
            <div class="container">
                <div class="row buyer-mess-title">
                    <a href="#">
                        <img src="/thinkPhpPro/Shop/Public/img/buyer/menberhome.png">
                    </a>
                </div>
                <div class="row buyer-mess-con">
                    <div class="col-md-2 menber-message-slider">
                        <div class="row menber-message-pic">
                            <img src="<?php echo ($data['salerimg']); ?>">
                        </div>
                        <span class="row menber_message_signal">
                            个人信息管理
                        </span>
                        <ul class="row">
                            <li class="menber_active"><span class="menber_message_first">账号信息</span></li>
                            <li><span class="menber_message_second">商品信息</span></li>
                            <li><span class="menber_message_third">发布商品</span></li>
                            <li><span class="menber_message_forth">订单信息</span></li>
                            <li><span class="menber_message_fifth">修改密码</span></li>
                        </ul>
                    </div>
                    <div class="col-md-10 menber_message_content">
                        <div class="menber_message_first_page">
                            <form class="col-md-offset-2 form-horizontal buyer-from"  enctype='multipart/form-data' role="form" method="post" action="<?php echo U('User/doUpdate');?>">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">用户名</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?php echo ($data['salername']); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber" class="col-sm-2 control-label">手机号码</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="" value="<?php echo ($data['salerphone']); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">邮箱地址</label>
                                    <div class="col-sm-5">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo ($data['saleremail']); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">住址</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="" value="<?php echo ($data['saleraddress']); ?>">
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
                                        <input type="text" name="submittype" value="商家" hidden="true">
                                        <input type="submit" class="btn btn-default" name="upsubmit" value="确认修改">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="menber_message_second_page table_page_show">
                            <table>
                                <tr>
                                    <th>商品名称</th>
                                    <th>商品介绍</th>
                                    <th>商品价格</th>
                                    <th>商品运费</th>
                                    <th>商品规格</th>                                  
                                    <th>商品分类</th>
                                    <th>商品数量</th>
                                    <th>操作</th>
                                </tr>
                                <?php if(is_array($salergoods)): $i = 0; $__LIST__ = $salergoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($goods['goodsname']); ?></td>
                                        <td><?php echo ($goods['goodsintro']); ?></td>
                                        <td>￥<?php echo ($goods['goodsprice']); ?></td>
                                        <td><?php echo ($goods['goodssend']); ?></td> 
                                        <td><?php echo ($goods['goodssize']); ?></td> 
                                        <td><?php echo ($goods['goodstype']); ?></td>                                       
                                        <td><?php echo ($goods['goodscount']); ?></td>
                                        <td>
                                            <a href="<?php echo U('User/goodsDelete/goodsid/'.$goods['goodsid']);?>">下架</a>
                                            <a href="<?php echo U('User/goodsUpdate/goodsid/'.$goods['goodsid']);?>">修改</a>
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
                        <div class="menber_message_third_page">
                            <form class="col-md-offset-2 form-horizontal buyer-from" enctype='multipart/form-data' role="form" method="post" action="<?php echo U('User/pushGoods');?>">
                                <div class="form-group">
                                    <label for="goodsname" class="col-sm-2 control-label">商品名称</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="goodsname" name="goodsname" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="goodsintro" class="col-sm-2 control-label">商品介绍</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="goodsintro" name="goodsintro" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="goodssize" class="col-sm-2 control-label">商品规格</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="goodssize" name="goodssize" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="goodsprice" class="col-sm-2 control-label">商品价格</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="goodsprice" name="goodsprice" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">商品类型</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="goodstype">
                                            <option>护肤</option>
                                            <option>卸妆</option>
                                            <option>彩妆</option>
                                            <option>身体</option>
                                            <option>头发</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="goodscount" class="col-sm-2 control-label">商品数量</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="goodscount" name="goodscount" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="goodssend" class="col-sm-2 control-label">商品运费</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="goodssend" name="goodssend" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">详情图片上传</label>
                                    <div class="col-sm-5">
                                        <input type="file" name="goodsPic[]" /><br>
                                        <input type="file" name="goodsPic[]" /><br>
                                        <input type="file" name="goodsPic[]" /><br>
                                        <input type="file" name="goodsPic[]" /><br>
                                        <input type="file" name="goodsPic[]" />
                                    </div>
                                </div>                    
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <input type="submit" class="btn btn-default" name="upsubmit" value="发布商品">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="menber_message_forth_page table_page_show">
                            <table>
                                <tr>
                                    <th>商品名称</th>
                                    <th>商品规格</th>
                                    <th>商品单价</th>
                                    <th>商品数量</th>
                                    <th>商品总价</th>
                                    <th>买家昵称</th>									
                                </tr>
                                <?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sh): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($sh['goodsname']); ?></td>
                                        <td><?php echo ($sh['goodssize']); ?></td>
                                        <td>￥<?php echo ($sh['goodsprice']); ?></td>
                                        <td><?php echo ($sh['goodscount']); ?></td>
                                        <td><?php echo ($sh['goodstotal']); ?></td>
                                        <td><?php echo ($sh['username']); ?></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </table>
                        </div>   
                        <div class="menber_message_fifth_page">
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
                                        <input type="text" name="submittype" value="商家" hidden="true">
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
    <script src="/thinkPhpPro/Shop/Public/js/jquery.js"></script>
    <script src="/thinkPhpPro/Shop/Public/js/shop.js"></script>
    <script src="/thinkPhpPro/Shop/Public/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>