<?php

namespace Home\Model;

use Think\Model;

class UserModel extends Model {

    public function doAddress($addressname, $addaddress, $addphone, $addnum, $userid) {
        $flag = false;
        $data['addressname'] = $addressname;
        $data['addressphone'] = $addphone;
        $data['addressadd'] = $addaddress;
        $data['addressnum'] = $addnum;
        $data['userid'] = $userid;
        $select = $this->table('useraddress')->where("addressname='$addressname'and addressphone='$addphone'and addressadd='$addaddress'and addressnum='$addnum'and userid='$userid'")->find();
        if ($select) {
            echo "<script>alert('该收货地址已存在！')</script>";
            return $flag;
        } else {
            $this->execute("insert into useraddress (addressname,addressphone,addressadd,addressnum,userid) values('$addressname','$addphone','$addaddress','$addnum','$userid')");
            $flag = true;
            return $flag;
        }
    }

    public function doRegister($username, $phonenum, $email, $sex, $address, $password, $submitType) {
        if ($submitType == "买家注册") {
            $data['username'] = $username;
            $data['phonenum'] = $phonenum;
            $data['email'] = $email;
            $data['sex'] = $sex;
            $data['address'] = $address;
            $data['password'] = $password;
            $select = $this->table('user')->where("username='$username'")->find();
            if ($select) {
                echo "<script>alert('用户名已存在！')</script>";
                return 0;
            } else {
                $this->execute("insert into user (username,phonenum,email,sex,address,password) values('$username','$phonenum','$email','$sex','$address','$password')");
                return 1;
            }
        } else if ($submitType == "商家注册") {
            $saler['salername'] = $username;
            $saler['salerphone'] = $phonenum;
            $saler['saleremail'] = $email;
            $saler['salersex'] = $sex;
            $saler['saleraddress'] = $address;
            $saler['salerpassword'] = $password;
            $select = $this->table('saler')->where("salername='$username'")->find();
            if ($select) {
                echo "<script>alert('用户名已存在！')</script>";
                return 0;
            } else {
                $this->execute("insert into saler (salername,salerphone,saleremail,salersex,saleraddress,salerpassword) values('$username','$phonenum','$email','$sex','$address','$password')");
                return 1;
            }
        }
    }

    public function doLogin($username, $password, $submitType) {
        if ($submitType == "买家登录") {
            $result = $this->table('user')->where("username='$username' and password ='$password'")->find();
        } else if ($submitType == "商家登录") {
            $result = $this->table('saler')->where("salername='$username' and salerpassword ='$password'")->find();
        }
        return $result;
    }

    public function buycart($userid) {
        $buycart = $this->table(array('goods' => 'g', 'buycart' => 'b'))->where("g.goodsid=b.goodsid and b.userid='$userid'")->select();
        return $buycart;
    }

    public function comment($shoplistid) {
        $comment = $this->table('comment')->where("shoplistid='$shoplistid'")->find();
        if ($comment == 0) {
            $items = $this->table(array('goods' => 'g', 'saler' => 's', 'shoplist' => 'l', 'user' => 'u'))->where("g.salerid=s.salerid and l.goodsid=g.goodsid and l.shoplistid='$shoplistid'and u.userid=l.userid")->find();
            return $items;
        }
    }

    public function message($shoplistid) {
        $items = $this->table(array('goods' => 'g', 'saler' => 's', 'shoplist' => 'l', 'user' => 'u', 'useraddress' => 'a'))->where("g.salerid=s.salerid and l.goodsid=g.goodsid and l.shoplistid='$shoplistid'and u.userid=l.userid and a.userid=u.userid and l.useraddid=a.useraddid")->find();
        return $items;
    }

    public function buyermessgae($userid) {
        $result = $this->table('user')->where("userid='$userid'")->find();
        return $result;
    }

    public function salermessgae($userid) {
        $result = $this->table('saler')->where("salerid='$userid'")->find();
        return $result;
    }

    public function goodslove($userid) {
        $result = $this->table(array('goods' => 'g', 'saler' => 's', "user" => 'u', "goodslove" => 'l'))->where("g.salerid=s.salerid and g.goodsid=l.goodsid and u.userid=l.userid and u.userid='$userid'")->select();
        return $result;
    }

    public function addressShow($userid) {
        $result = $this->table('useraddress')->where("userid='$userid'")->select();
        return $result;
    }

    public function doDelete($addressid) {
        $result = $this->execute("delete from useraddress where useraddid='$addressid'");
        return $result;
    }

    public function doUpdate($userid, $username, $phonenum, $email, $address, $infoPhoto, $submitType) {
        $flag = false;
        if ($submitType == "买家") {
            $update = $this->execute("update user set username='$username',phonenum='$phonenum',email='$email',address='$address',userimg='$infoPhoto' where userid='$userid'");
            $flag = true;
            return $flag;
        } else if ($submitType == "商家") {
            $result = $this->execute("update saler set salername='$username',salerphone='$phonenum',saleremail='$email',saleraddress='$address',salerimg='$infoPhoto' where salerid='$userid'");
            $flag = true;
            return $flag;
        }
    }

    public function doPassword($userid, $oldPassword, $newPassword, $submit) {
        if ($submit == "买家") {
            $user = $this->table('user')->where("userid='$userid'")->find();
            $flag = false;
            if ($oldPassword !== $user['password']) {
                $flag = false;
                return $flag;
            } else {
                $update = $this->execute("update user set password='$newPassword' where userid='$userid'");
                $flag = true;
                return $flag;
            }
        } else if ($submit == "商家") {
            $user = $this->table('saler')->where("salerid='$userid'")->find();
            $flag = false;
            if ($oldPassword !== $user['salerpassword']) {
                $flag = false;
                return $flag;
            } else {
                $update = $this->execute("update saler set salerpassword='$newPassword' where salerid='$userid'");
                $flag = true;
                return $flag;
            }
        }
    }

    public function doLove($itemsid, $userid) {
        $select = $this->table('goodslove')->where("userid='$userid'and goodsid='$itemsid'")->find();
        if ($select == 0) {
            $result = $this->execute("insert into goodslove (userid,goodsid) value ('$userid','$itemsid')");
            return $result;
        }
    }

    public function doLoveDelect($goodslovesid) {
        $result = $this->execute("delete from goodslove where goodsloveid='$goodslovesid'");
        return $result;
    }

    public function doBuy($userid, $goodsid, $goodscount, $goodstotal, $buySubmit) {
        if ($buySubmit == '加入购物车') {
            $select = $this->table('buycart')->where("goodsid='$goodsid'")->find();
            if ($select == 0) {
                $result = $this->execute("insert into buycart (userid,goodsid,goodscount,goodstotal) values('$userid','$goodsid','$goodscount','$goodstotal')");
                return $result;
            } else {
                $result = $this->execute("update buycart set goodscount=(goodscount+$goodscount),goodstotal=(goodstotal+$goodstotal)");
                return $result;
            }
        } else if ($buySubmit == "立即购买") {
            $result = $this->execute("insert into shoplist (userid,goodsid,goodscount,goodstotal) values('$userid','$goodsid','$goodscount','$goodstotal')");
            return $result;
        }
    }

    public function buycartDelete($buycartid) {
        $result = $this->execute("delete from buycart where buycartid='$buycartid'");
        return $result;
    }

    public function shopList($userid) {
        $result = $this->table(array('goods' => 'g', 'shoplist' => 'l', "user" => 'u'))->where("g.goodsid=l.goodsid and u.userid=l.userid and u.userid='$userid' and repay='0'")->select();
        return $result;
    }

    public function shopAddress($userid) {
        $result = $this->table('useraddress')->where("userid='$userid'and selected='1'")->find();
        return $result;
    }

    public function addressSele($userid) {
        $result = $this->table('useraddress')->where("userid='$userid'")->select();
        return $result;
    }

    public function addSelect($selected) {
        $this->execute("update useraddress set selected='0' where useraddid!='$selected'");
        $result = $this->execute("update useraddress set selected='1' where useraddid='$selected'");
        return $result;
    }

    public function deleteShop($userid) {
        $result = $this->execute("delete from shoplist where userid='$userid' and repay='0'");
        return $result;
    }

    public function doSuccess($userid, $useraddid) {
        $result = $this->execute("update shoplist set repay='1',useraddid='$useraddid' where userid='$userid' and repay='0'");
        return $result;
    }

    public function shopSuccess($userid) {
        $result = $this->table(array('goods' => 'g', 'shoplist' => 'l', "user" => 'u', 'saler' => 's'))->where("g.goodsid=l.goodsid and u.userid=l.userid and u.userid='$userid' and repay='1'and g.salerid=s.salerid")->select();
        return $result;
    }

    public function doBuycartList($select) {
        $buycart = $this->table('buycart')->select();
        for ($i = 0; $i < count($select); $i++) {
            for ($j = 0; $j < count($buycart); $j++) {
                if ($buycart[$j]['buycartid'] == $select[$i]) {
                    $userid = $buycart[$j]['userid'];
                    $goodsid = $buycart[$j]['goodsid'];
                    $goodscount = $buycart[$j]['goodscount'];
                    $goodstotal = $buycart[$j]['goodstotal'];
                    $result = $this->execute("insert into shoplist (userid,goodsid,goodscount,goodstotal) values ('$userid','$goodsid','$goodscount','$goodstotal')");
                    $this->execute("delete from buycart where buycartid='$select[$i]'");
                }
            }
        }
        return 1;
    }

    public function doComment($userid, $comment, $shoplistid, $salerid) {
        $result = $this->execute("insert into comment (userid,shoplistid,content) values ('$userid','$shoplistid','$comment')");
        return $result;
    }

    public function salergoods($userid) {
        $result = $this->table('goods')->where("salerid='$userid'and now='1'")->select();
        return $result;
    }

    public function goodsDelete($goodsid) {
        $result = $this->execute("update goods set now='0'where goodsid='$goodsid'");
        return $result;
    }

    public function shopShow($userid) {
        $result = $this->table(array('goods' => 'g', 'shoplist' => 'l', "user" => 'u', 'saler' => 's'))->where("l.goodsid=g.goodsid and l.userid=u.userid and g.salerid=s.salerid and s.salerid='$userid'")->select();
        return $result;
    }

    public function goods($goodsname, $goodsintro, $goodssize, $goodsprice, $goodstype, $goodscount, $goodssend, $goodsimg00, $goodsimg01, $goodsimg02, $goodsimg03, $goodsimg04, $buycartimg, $userid) {
        $result = $this->execute("insert into goods (goodsname,goodsintro,goodssize,goodsprice,goodstype,goodscount,goodssend,goodsimg00,goodsimg01,goodsimg02,goodsimg03,goodsimg04,buycartimg,salerid) values ('$goodsname','$goodsintro','$goodssize','$goodsprice','$goodstype','$goodscount','$goodssend','$goodsimg00','$goodsimg01','$goodsimg02','$goodsimg03','$goodsimg04','$buycartimg','$userid')");
        return $result;
    }

    public function goodsUpdate($goodsid) {
        $result = $this->table(array('goods' => 'g', 'saler' => 's'))->where("g.salerid=s.salerid and g.goodsid='$goodsid'")->find();
        return $result;
    }

    public function updateGoods($goodsid, $goodsname, $goodsintro, $goodssize, $goodsprice, $goodscount, $goodssend) {
        $result = $this->execute("update goods set goodsname='$goodsname',goodsintro='$goodsintro',goodssize='$goodssize',goodsprice='$goodsprice',goodscount='$goodscount',goodssend='$goodssend'  where goodsid='$goodsid'");
        return 1;
    }

}
