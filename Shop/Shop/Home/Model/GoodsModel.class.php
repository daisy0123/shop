<?php

namespace Home\Model;

use Think\Model;

class GoodsModel extends Model {

    public function goods() {
        $items = $this->table('goods')->limit('8')->select();
        return $items;
    }

    public function search($keyword) {
        $goods = $this->table(array('goods' => 'g', 'saler ' => 's'))->where("g.salerid=s.salerid and g.goodsname like '%$keyword%' and now='1'")->select();
        return $goods;
    }

    public function goodsList($goodstype) {
        $goods = $this->table(array('goods' => 'g', 'saler ' => 's'))->where("g.salerid=s.salerid and g.goodstype='$goodstype'and now='1'")->select();
        return $goods;
    }

    public function items($goodsid) {
        $items = $this->table(array('goods' => 'g', 'saler' => 's'))->where("g.salerid=s.salerid and g.goodsid=$goodsid")->find();
        return $items;
    }

    public function showComment($goodsid) {
        $result = $this->table(array('comment' => 'c', 'shoplist' => 'l', "user" => 'u'))->where("l.goodsid='$goodsid'and l.shoplistid=c.shoplistid and l.userid=c.userid and c.userid=u.userid")->select();
        return $result;
    }

}
