<?php

namespace Home\Model;

use Think\Model;

class IndexModel extends Model {

    public function doAdmin($username, $password) {
        $result = $this->table('index')->where("adminname='$username' and adminpassword ='$password'")->find();
        return $result;
    }

    public function user() {
        $result = $this->table('user')->select();
        return $result;
    }

    public function saler() {
        $result = $this->table('saler')->select();
        return $result;
    }

    public function goods() {
        $goods = $this->table(array('goods' => 'g', 'saler ' => 's'))->where("g.salerid=s.salerid and now='1'")->select();
        return $goods;
    }

    public function shop() {
        $result = $this->table(array('goods' => 'g', 'shoplist' => 'l', "user" => 'u', 'saler' => 's'))->where("g.goodsid=l.goodsid and u.userid=l.userid  and repay='1' and g.salerid=s.salerid")->select();
        return $result;
    }

    public function manager() {
        $result = $this->table('index')->select();
        return $result;
    }

    public function userUpdate($userid) {
        $result = $this->table('user')->where("userid='$userid'")->find();
        return $result;
    }

    public function salerUpdate($salerid) {
        $result = $this->table('saler')->where("salerid='$salerid'")->find();
        return $result;
    }

    public function goodsUpdate($goodsid) {
        $result = $this->table('goods')->where("goodsid='$goodsid'")->find();
        return $result;
    }

    public function managerUpdate($adminid) {
        $result = $this->table('index')->where("adminid='$adminid'")->find();
        return $result;
    }

    public function doUser($userid, $username, $userphone, $email, $sex, $address, $password) {
        $update = $this->execute("update user set username='$username',phonenum='$userphone',email='$email',sex='$sex',address='$address',password='$password' where userid='$userid'");
        return $update;
        ;
    }

    public function doSaler($userid, $username, $userphone, $email, $sex, $address, $password) {
        $update = $this->execute("update saler set salername='$username',salerphone='$userphone',saleremail='$email',salersex='$sex',saleraddress='$address',salerpassword='$password' where salerid='$userid'");
        return $update;
    }

    public function doGoods($goodsid, $goodsname, $goodsintro,$goodssize, $goodsprice, $goodscount, $goodssend) {
        $update = $this->execute("update goods set goodsname='$goodsname',goodsintro='$goodsintro',goodssize='$goodssize',goodsprice='$goodsprice',goodscount='$goodscount',goodssend='$goodssend' where goodsid='$goodsid'");
        return $update;
    }

    public function addUser($username, $userphone, $email, $sex, $address, $password) {
       $result= $this->execute("insert into user (username,phonenum,email,sex,address,password) values('$username','$userphone','$email','$sex','$address','$password')");
        return $result;
    }
    public function addSaler($username, $userphone, $email, $sex, $address, $password) {
        $result=$this->execute("insert into saler (salername,salerphone,saleremail,salersex,saleraddress,salerpassword) values('$username','$userphone','$email','$sex','$address','$password')");
         return $result;
    }
    public function addGoods($goodsname, $goodsintro,$goodssize,$goodsprice, $goodscount, $goodssend) {
        $result = $this->execute("insert into goods (goodsname,goodsintro,goodssize,goodsprice,goodscount,goodssend,salerid) values ('$goodsname','$goodsintro','$goodssize','$goodsprice','$goodscount','$goodssend','1')");
        return $result;
    }
    public function userDelete($userid) {
        $result=$this->execute("delete from user where userid='$userid'");
        return $result;
    }
    public function salerDelete($salerid) {
        $result=$this->execute("delete from saler where salerid='$salerid'");
        return $result;
    }
    public function goodsDelete($goodsid) {
       $result = $this->execute("update goods set now='0'where goodsid='$goodsid'");
        return $result;
    }
}
