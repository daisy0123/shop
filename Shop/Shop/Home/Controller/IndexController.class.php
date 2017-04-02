<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\GoodsModel;
use Home\Model\IndexModel;

class IndexController extends Controller {

    public function index() {
        $username = session('username');
        if ($username) {
            $this->assign("username", $username);
        } else {
            layout('Public/indexLayout');
        }
        $goods = new GoodsModel();
        $result = $goods->goods();
        $this->assign("goods", $result);
        $this->display();
    }

    public function adminLogin() {
        layout(false);
        $this->display();
    }

    public function doAdmin() {
        $username = I('post.username');
        $password = I('post.password');
        $admin = new IndexModel();
        $adminLogin = $admin->doAdmin($username, $password);
        if ($adminLogin == "") {
            echo "<script>alert('用户名或密码不正确，登录失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            session('admin', $username);
            $this->redirect('/Index/admin/', 1);
        }
    }

    public function admin() {
        layout('Public/adminLayout');
        $username = session('admin');
        if ($username) {
            $admin = new IndexModel();
            $user = $admin->user();
            $saler = $admin->saler();
            $goods = $admin->goods();
            $shop = $admin->shop();
            $manager = $admin->manager();
            $this->assign('user', $user);
            $this->assign('saler', $saler);
            $this->assign('goods', $goods);
            $this->assign('shop', $shop);
            $this->assign('admin', $manager);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='adminLogin';</script>";
        }
    }

    public function adminAdd() {
        layout('Public/adminLayout');
        $this->display();
    }

    public function adminUpdate() {
        layout('Public/adminLayout');
        $userid = I('get.userid');
        $salerid = I('get.salerid');
        $goodsid = I('get.goodsid');
        $adminid = I('adminid');
        $admin = new IndexModel();
        if ($userid) {
            $user = $admin->userUpdate($userid);
            $this->assign('user', $user);
        } else if ($salerid) {
            $saler = $admin->salerUpdate($salerid);
            $this->assign('saler', $saler);
        } else if ($goodsid) {
            $goods = $admin->goodsUpdate($goodsid);
            $this->assign('goods', $goods);
        } else if ($adminid) {
            $manager = $admin->managerUpdate($adminid);
            $this->assign('manager', $manager);
        }
        $this->display();
    }

    public function doAdminUp() {
        $type = I('post.type');
        $update = new IndexModel();
        if ($type == '买家') {
            $userid = I('post.userid');
            $username = I('post.name');
            $userphone = I('post.phone');
            $email = I('post.email');
            $sex = I('post.sex');
            $address = I('post.address');
            $password = I('post.password');
            $user = $update->doUser($userid, $username, $userphone, $email, $sex, $address, $password);
        } else if ($type == '商家') {
            $salerid = I('post.salerid');
            $username = I('post.name');
            $userphone = I('post.phone');
            $email = I('post.email');
            $sex = I('post.sex');
            $address = I('post.address');
            $password = I('post.password');
            $user = $update->doSaler($salerid, $username, $userphone, $email, $sex, $address, $password);
        } else if ($type == '商品') {
            $goodsid = I('post.goodsid');
            $goodsname = I('post.goodsname');
            $goodsintro = I('post.goodsintro');
            $goodssize = I('post.goodssize');
            $goodsprice = I('post.goodsprice');
            $goodscount = I('post.goodscount');
            $goodssend = I('post.goodssend');
            $user = $update->doGoods($goodsid, $goodsname, $goodsintro, $goodssize, $goodsprice, $goodscount, $goodssend);
        }
        if (!$user) {
            echo "<script>alert('修改失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('修改成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function doAdminAdd() {
        $type = I('post.type');
        print_r($_POST);
        $update = new IndexModel();
        if ($type == '买家') {
            $username = I('post.name');
            $userphone = I('post.phone');
            $email = I('post.email');
            $sex = I('post.sex');
            $address = I('post.address');
            $password = I('post.password');
            $user = $update->addUser($username, $userphone, $email, $sex, $address, $password);
        } else if ($type == '商家') {
            $username = I('post.name');
            $userphone = I('post.phone');
            $email = I('post.email');
            $sex = I('post.sex');
            $address = I('post.address');
            $password = I('post.password');
            $user = $update->addSaler($username, $userphone, $email, $sex, $address, $password);
        } else if ($type == '商品') {
            $goodsname = I('post.goodsname');
            $goodsintro = I('post.goodsintro');
            $goodssize = I('post.goodssize');
            $goodsprice = I('post.goodsprice');
            $goodscount = I('post.goodscount');
            $goodssend = I('post.goodssend');
            $user = $update->addGoods($goodsname, $goodsintro, $goodssize, $goodsprice, $goodscount, $goodssend);
        } 
        if (!$user) {
            echo "<script>alert('添加失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('添加成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }
    public function adminDelect() {
        $userid = I('get.userid');
        $salerid = I('get.salerid');
        $goodsid = I('get.goodsid');
        $admin = new IndexModel();
        if ($userid) {
            $result = $admin->userDelete($userid);
        } else if ($salerid) {
            $result = $admin->salerDelete($salerid);
        } else if ($goodsid) {
            $result = $admin->goodsDelete($goodsid);  
        } 
         if (!$result) {
            echo "<script>alert('删除失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('删除成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }
}
