<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\GoodsModel;

class GoodsController extends Controller {

    public function goodsList($goodstype) {
        $username = session('username');
        $goods = new GoodsModel();
        if ($username) {
            $this->assign("username", $username);
        } else {
            layout('Public/indexLayout');
        }
        if ($goodstype == '查询') {
            $keyword = I('get.keyword');
            $result = $goods->search($keyword);
            $this->assign("goodstype", $goodstype);
            if ($result) {
                $this->assign('goodslist', $result);
            }
        } else {
            $result = $goods->goodsList($goodstype);
            $this->assign("goodstype", $goodstype);
            if ($result) {
                $this->assign('goodslist', $result);
            }
        }
        $this->display();
    }

    public function items($goodsid) {
        $item = new GoodsModel();
        $result = $item->items($goodsid);
        $username = session('username');
        if ($username) {
            $this->assign("username", $username);
        } else {
            layout('Public/indexLayout');
        }
        $result = $item->items($goodsid);
        if ($result) {
            $comment = $item->showComment($goodsid);
            $this->assign('items', $result);
            $this->assign('comment', $comment);
            $this->display();
        } else {
            echo "<script>alert('商品已下架！');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        }
    }
}
