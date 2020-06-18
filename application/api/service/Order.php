<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/19
 * Time: 7:34 上午
 */

namespace app\api\service;


class Order
{
    //订单商品列表，也就是客户端传递过来的products参数
    protected $oProducts;
    //真实的商品信息（包括库存量）
    protected $products;

    protected $uid;

    public function place($uid,$oProducts){
        //$oProducts 和 $products作对比
        //$products从数据库中查询出来
        $this->oProducts = $oProducts;
        $this->products = '';
        $this->uid = $uid;
    }

    //根据订单信息查找真实的商品信息
    private function getProductsByOrder($oProducts){
        foreach ($oProducts as $oProduct){

        }
    }
}