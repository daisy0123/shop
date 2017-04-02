<?php

namespace Home\Controller;

use Think\Controller;
use \Home\Model\UserModel;

class UserController extends Controller {

    public function login() {
        layout('Public/indexLayout');
        $this->display();
    }

    public function register() {
        layout('Public/indexLayout');
        $this->display();
    }

    public function buyer() {
        $username = session('username');
        if ($username) {
            $userid = session('userid');
            $this->assign("username", $username);
            $buyer = new UserModel();
            $result = $buyer->buyermessgae($userid);
            $goodslove = $buyer->goodslove($userid);
            $address = $buyer->addressShow($userid);
            $success = $buyer->shopSuccess($userid);
            $this->assign("data", $result);
            $this->assign("goodslove", $goodslove);
            $this->assign("addressShow", $address);
            $this->assign("shopsuccess", $success);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function saler() {
        layout(FALSE);
        $username = session('username');
        $userid = session('userid');
        $saler = new UserModel();
        $result = $saler->salermessgae($userid);
        $salergoods = $saler->salergoods($userid);
        $shopShow = $saler->shopShow($userid);
        if ($username) {
            $this->assign("username", $username);
            $this->assign("data", $result);
            $this->assign("salergoods", $salergoods);
            $this->assign("shop", $shopShow);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function buycart() {
        $username = session('username');
        $userid = session('userid');
        if ($username) {
            $this->assign("username", $username);
            $buycart = new UserModel();
            $buy = $buycart->buycart($userid);
            $this->assign("buycart", $buy);
            $this->display();
            $buycart->deleteShop($userid);
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function shopList($userid) {
        $username = session('username');
        if ($username) {
            $this->assign("username", $username);
            $shoplist = new UserModel();
            $address = $shoplist->shopAddress($userid);
            $result = $shoplist->shopList($userid);
            $this->assign("shoplist", $result);
            $this->assign("data", $address);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function addressSele() {
        $username = session('username');
        $userid = session('userid');
        if ($username) {
            $this->assign("username", $username);
            $address = new UserModel();
            $result = $address->addressSele($userid);
            $this->assign("addressSele", $result);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function repay() {
        $username = session('username');
        $total = I("post.money");
        $useraddid = I("post.useraddress");
        if ($username) {
            $this->assign("username", $username);
            $this->assign("useraddid", $useraddid);
            $this->assign("money", $total);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function comment($shoplistid) {
        $username = session('username');
        if ($username) {
            $comment = new UserModel();
            $result = $comment->comment($shoplistid);
            $this->assign("username", $username);
            if ($result) {
                $this->assign("items", $result);
                $this->display();
            } else {
                echo "<script>alert('你已经评论过了！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
            }
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function message($shoplistid) {
        $username = session('username');
        if ($username) {
            $message = new UserModel();
            $result = $message->message($shoplistid);
            $this->assign("username", $username);
            $this->assign("items", $result);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function doRegister() {
        if (isset($_POST['submitType'])) {
            $username = I('post.username');
            $phonenum = I('post.phonenumber');
            $email = I('post.email');
            $sex = I('post.sex');
            $address = I('post.address');
            $password = I('post.password');
            $submitType = I('post.submitType');
            $user = new UserModel();
            $userRegister = $user->doRegister($username, $phonenum, $email, $sex, $address, $password, $submitType);
            if ($userRegister=='0') {
                echo "<script>alert('注册失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
            } else {
                echo "<script>alert('注册成功！请登录！');location.href='login';</script>";
            }
        }
    }

    public function doLogin() {
        if (isset($_POST['submitType'])) {
            $username = I('post.username');
            $password = I('post.password');
            $submitType = I('post.submitType');
            $user = new UserModel();
            $userLogin = $user->doLogin($username, $password, $submitType);
            if ($userLogin == "") {
                echo "<script>alert('用户名或密码不正确，登录失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
            } else {
                session('username', $username);
                if ($submitType == "买家登录") {
                    $userid = $userLogin['userid'];
                    session('userid', $userid);
                    $this->redirect('/Index/index/', 1);
                } else if ($submitType == "商家登录") {
                    $salerid = $userLogin['salerid'];
                    session('userid', $salerid);
                    $this->redirect('/User/saler', 1);
                }
            }
        }
    }

    public function Logout() {
        session(null);
        $this->redirect('Index/index');
    }

    public function doPassword() {
        $userid = session('userid');
        $oldpass = I('post.oldpass');
        $newpass = I('post.newpass');
        $submit = I('post.submittype');
        $doPassword = new UserModel();
        $result = $doPassword->doPassword($userid, $oldpass, $newpass, $submit);
        if (!$result) {
            echo "<script>alert('旧密码不对，修改失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('修改成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function doDelect($addressid) {
        $delectAddress = new UserModel();
        $result = $delectAddress->doDelete($addressid);
        if (!$result) {
            echo "<script>alert('删除失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('删除成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function doUpdate() {
        $userid = session('userid');
        $username = I('post.username');
        $phonenum = I('post.phonenumber');
        $email = I('post.email');
        $address = I('post.address');
        $submit = I('post.submittype');
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->replace = 'true';
        $upload->exts = array('jpg', 'png');
        $upload->rootPath = './Public/';
        $upload->savePath = 'upload/';
        if ($submit == '商家') {
            $upload->subName = 'saler';
            $upload->saveName = 'saler' . $userid;
        } else if ($submit == '买家') {
            $upload->subName = 'user';
            $upload->saveName = 'user' . $userid;
        }
        $info = $upload->uploadOne($_FILES['photo']);
        $public = "../../Public/";
        $infoPhoto = $public . $info['savepath'] . $info['savename'];
        $update = new UserModel();
        $result = $update->doUpdate($userid, $username, $phonenum, $email, $address, $infoPhoto, $submit);
        if (!$result) {
            echo "<script>alert('修改失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('修改成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function doAddress() {
        $userid = session('userid');
        $addressname = I("post.addname");
        $addaddress = I("post.addaddress");
        $addphone = I("post.addphone");
        $addnum = I("post.addnum");
        $address = new UserModel();
        $result = $address->doAddress($addressname, $addaddress, $addphone, $addnum, $userid);
        if (!$result) {
            echo "<script>alert('添加失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('添加成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function doLove($itemsid) {
        if (empty(session())) {
            echo "<script>alert('请登录！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            $userid = session('userid');
            $goodslove = new UserModel();
            $result = $goodslove->doLove($itemsid, $userid);
            if (!$result) {
                echo "<script>alert('商品已经收藏，收藏失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
            } else {
                echo "<script>alert('收藏成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
            }
        }
    }

    public function doLoveDelect($goodslovesid) {
        $goodsloveDe = new UserModel();
        $result = $goodsloveDe->doLoveDelect($goodslovesid);
        if (!$result) {
            echo "<script>alert('删除失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('删除成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function doBuy() {
        if (empty(session())) {
            echo "<script>alert('请登录！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            $userid = session('userid');
            $goodsid = I("post.goodsid");
            $goodscount = I("post.goodscount");
            $goodstotal = I("post.goodstotal");
            $buySubmit = I("post.buySubmit");
            $buy = new UserModel();
            $result = $buy->doBuy($userid, $goodsid, $goodscount, $goodstotal, $buySubmit);
            if ($buySubmit == "加入购物车") {
                if (!$result) {
                    echo "<script>alert('添加购物车失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
                } else {
                    echo "<script>alert('添加购物车成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
                }
            } else if ($buySubmit == "立即购买") {
                if (!$result) {
                    echo "<script>alert('立即购买失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
                } else {
                    $this->redirect("User/shopList/userid/$userid");
                }
            }
        }
    }

    public function buycartDelete($buycartid) {
        $buycartDelete = new UserModel();
        $result = $buycartDelete->buycartDelete($buycartid);
        if (!$result) {
            echo "<script>alert('删除失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('删除成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function addSelect() {
        $selected = I("post.addressid");
        $userid = session('userid');
        $select = new UserModel();
        $result = $select->addSelect($selected);
        $this->redirect('User/shopList/userid/' . $userid);
    }

    public function doSuccess() {
        $repaySub = I("post.repaySub");
        $useraddid = I('post.useraddress');
        $userid = session("userid");
        if (isset($repaySub)) {
            $repay = new UserModel();
            $result = $repay->doSuccess($userid, $useraddid);   
            echo "<script>alert('支付成功！');location.href='../Index/index'</script>";
        }
    }

    public function doBuycartList() {
        $select = I("post.goodsselect");
        $userid = session('userid');
        $shoplist = new UserModel();
        $result = $shoplist->doBuycartList($select);
        if ($result) {
            $this->redirect('User/shoplist/userid/' . $userid);
        }
    }

    public function doComment() {
        $comment = I('post.comment');
        $shoplistid = I('post.shoplist');
        $userid = session('userid');
        $content = new UserModel();
        $result = $content->doComment($userid, $comment, $shoplistid);
        if (!$result) {
            echo "<script>alert('评论失败！');location.href='comment'</script>";
        } else {
            echo "<script>alert('评论成功！');location.href='buyer'</script>";
        }
    }

    public function goodsDelete($goodsid) {
        $goodsdelete = new UserModel();
        $result = $goodsdelete->goodsDelete($goodsid);
        if (!$result) {
            echo "<script>alert('下架失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('下架成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function pushGoods() {
        $salerid = session('userid');
        $goodsname = I('post.goodsname');
        $goodsintro = I('post.goodsintro');
        $goodssize = I('post.goodssize');
        $goodsprice = I('post.goodsprice');
        $goodstype = I('post.goodstype');
        $goodscount = I('post.goodscount');
        $goodssend = I('post.goodssend');
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->subName = 'goods';
        $upload->saveName = '';
        $upload->replace = 'true';
        $upload->rootPath = './Public/';
        $upload->savePath = 'upload/';
        $public = "../../../../Public/";
        $buycart = "../../Public/";
        $info = $upload->upload();
        $goodsimg00 = $public . $info['0']['savepath'] . $info['0']['savename'];
        $goodsimg01 = $public . $info['1']['savepath'] . $info['1']['savename'];
        $goodsimg02 = $public . $info['2']['savepath'] . $info['2']['savename'];
        $goodsimg03 = $public . $info['3']['savepath'] . $info['3']['savename'];
        $goodsimg04 = $public . $info['4']['savepath'] . $info['4']['savename'];
        $buycartimg = $buycart . $info['0']['savepath'] . $info['0']['savename'];
        $goods = new UserModel();
        $result = $goods->goods($goodsname, $goodsintro, $goodssize, $goodsprice, $goodstype, $goodscount, $goodssend, $goodsimg00, $goodsimg01, $goodsimg02, $goodsimg03, $goodsimg04, $buycartimg, $salerid);
        if (!$result) {
            echo "<script>alert('发布商品失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('发布商品成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

    public function goodsUpdate($goodsid) {
        layout(FALSE);
        $username = session('username');
        if ($username) {
            $goodsupdate = new UserModel();
            $result = $goodsupdate->goodsUpdate($goodsid);
            $this->assign("username", $username);
            $this->assign("items", $result);
            $this->display();
        } else {
            echo "<script>alert('请先登录！');location.href='login'</script>";
        }
    }

    public function updateGoods() {
        $salerid = session('userid');
        $goodsname = I('post.goodsname');
        $goodsintro = I('post.goodsintro');
        $goodssize = I('post.goodssize');
        $goodsprice = I('post.goodsprice');
        $goodscount = I('post.goodscount');
        $goodssend = I('post.goodssend');
        $goodsid = I('post.goodsid');
        $goods = new UserModel();
        $result = $goods->updateGoods($goodsid, $goodsname, $goodsintro, $goodssize, $goodsprice, $goodscount, $goodssend);
        if ($result=='1') {
            echo "<script>alert('修改商品成功！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        } else {
            echo "<script>alert('修改商品失败！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }

}
