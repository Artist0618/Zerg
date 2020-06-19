<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/20
 * Time: 7:22 上午
 */

namespace app\api\service;


use think\Exception;

class Pay
{
    private $orderID;
    private $orderNO;

    function __construct($orderID)
    {
        if (!$orderID){
            throw new Exception('订单号不允许为NULL');
        }
        $this->orderID = $orderID;
    }

    public function pay(){

    }
}