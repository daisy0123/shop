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
        <div class="col-md-2"><button type="button" class="btn btn-default" id="first-part">买家管理</button></div>
        <div class="col-md-2"><button type="button" class="btn btn-default second-part" id="second-part">商家管理</button></div>
        <div class="col-md-2"><button type="button" class="btn btn-default third-part" id="third-part">商品管理</button></div>
        <div class="col-md-2"><button type="button" class="btn btn-default forth-part" id="forth-part">交易管理</button></div>
        <div class="col-md-2"> <button type="button" class="btn btn-default fifth-part" id="fifth-part">管理员管理</button></div>
          <div class="col-md-2"> <a href="<?php echo U('Index/adminAdd');?>"><button type="button" class="btn btn-default fifth-part">添加管理</button></a></div>
    </div>
</div>
<div class="row part-page">
    <div class="first-part-page">
        <table class="table-bordered table-condensed col-md-12">
            <tr>
                <th>买家号</th>
                <th>买家昵称</th>
                <th>买家电话号码</th>   
                <th>买家邮箱</th>   
                <th>买家性别</th>   
                <th>买家地址</th>  
                <th>买家头像</th>  
                <th>操作</th>  
            </tr>
            <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($u['userid']); ?></td>
                    <td><?php echo ($u['username']); ?></td>
                    <td><?php echo ($u['phonenum']); ?></td>
                    <td><?php echo ($u['email']); ?></td> 
                    <td><?php echo ($u['sex']); ?></td>
                    <td><?php echo ($u['address']); ?></td>
                    <td><img src="<?php echo ($u['userimg']); ?>"></td> 
                    <td>
                        <a href="<?php echo U('Index/adminUpdate/userid/'.$u['userid']);?>">修改</a>&emsp;
                        <a href="<?php echo U('Index/adminDelect/userid/'.$u['userid']);?>">删除</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
    <div class="second-part-page">
        <table class="table-bordered table-condensed col-md-12">
            <tr>
                <th>商家号</th>
                <th>商家昵称</th>
                <th>商家电话号码</th>   
                <th>商家邮箱</th>   
                <th>商家性别</th>   
                <th>商家地址</th>  
                <th>商家头像</th>  
                <th>操作</th>  
            </tr>
            <?php if(is_array($saler)): $i = 0; $__LIST__ = $saler;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($s['salerid']); ?></td>
                    <td><?php echo ($s['salername']); ?></td>
                    <td><?php echo ($s['salerphone']); ?></td>
                    <td><?php echo ($s['saleremail']); ?></td> 
                    <td><?php echo ($s['salersex']); ?></td>
                    <td><?php echo ($s['saleraddress']); ?></td>
                    <td><img src="<?php echo ($s['salerimg']); ?>"></td> 
                    <td>
                        <a href="<?php echo U('Index/adminUpdate/salerid/'.$s['salerid']);?>">修改</a>&emsp;
                        <a href="<?php echo U('Index/adminDelect/salerid/'.$s['salerid']);?>">删除</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
    <div class="third-part-page">
        <table class="table-bordered table-condensed col-md-12">
            <tr>
                <th>商品号</th>
                <th>商品名称</th>
                <th>商品信息</th>   
                <th>商品规格</th> 
                <th>商品价格</th>   
                <th>商品数量</th>   
                <th>商品运费</th>  
                <th>商品类型</th> 
                <th>商品图片</th>  
                <th>商家昵称</th> 
                <th>操作</th>  
            </tr>
            <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($g['goodsid']); ?></td>
                    <td><?php echo ($g['goodsname']); ?></td>
                    <td><?php echo ($g['goodsintro']); ?></td>
                    <td><?php echo ($g['goodssize']); ?></td> 
                    <td><?php echo ($g['goodsprice']); ?></td>
                    <td><?php echo ($g['goodscount']); ?></td>
                    <td><?php echo ($g['goodssend']); ?></td> 
                    <td><?php echo ($g['goodstype']); ?></td>
                    <td><img src="<?php echo ($g['buycartimg']); ?>"></td> 
                    <td><?php echo ($g['salername']); ?></td>
                    <td>
                        <a href="<?php echo U('Index/adminUpdate/goodsid/'.$g['goodsid']);?>">修改</a>&emsp;
                        <a href="<?php echo U('Index/adminDelect/goodsid/'.$g['goodsid']);?>">删除</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
    <div class="forth-part-page">
        <table class="table-bordered table-condensed col-md-12">
            <tr>
                <th>交易号</th>
                <th>商品名称</th>
                <th>商品信息</th>   
                <th>商品规格</th> 
                <th>商品价格</th>   
                <th>商品数量</th>   
                <th>商品运费</th>  
                <th>商品总额</th>
                <th>商品类型</th> 
                <th>商品图片</th>  
                <th>商家昵称</th> 
                <th>买家昵称</th>
              
            </tr>
            <?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($h['shoplistid']); ?></td>
                    <td><?php echo ($h['goodsname']); ?></td>
                    <td><?php echo ($h['goodsintro']); ?></td>
                    <td><?php echo ($h['goodssize']); ?></td> 
                    <td><?php echo ($h['goodsprice']); ?></td>
                    <td><?php echo ($h['goodscount']); ?></td>
                    <td><?php echo ($h['goodssend']); ?></td> 
                    <td><?php echo ($h['goodstotal']); ?></td> 
                    <td><?php echo ($h['goodstype']); ?></td>
                    <td><img src="<?php echo ($h['buycartimg']); ?>"></td> 
                    <td><?php echo ($h['salername']); ?></td>
                    <td><?php echo ($h['username']); ?></td>
                    
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
    <div class="fifth-part-page">
        <table class="table-bordered table-condensed col-md-12">
            <tr>
                <th>管理员号</th>
                <th>管理员昵称</th>
                <th>管理员密码</th>   
                <th>操作</th>  
            </tr>
            <?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($a['adminid']); ?></td>
                    <td><?php echo ($a['adminname']); ?></td>
                    <td><?php echo ($a['adminpassword']); ?></td>
                    <td>
                        唯一管理员
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
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