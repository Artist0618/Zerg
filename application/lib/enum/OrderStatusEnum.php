<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/21
 * Time: 8:50 上午
 */

namespace app\lib\enum;


class OrderStatusEnum
{
    //待支付
    const UNPAID = 1;

    //已支付
    const PAID = 2;

    //已发货
    const DELIVERED = 3;

    //已支付，但库存不足
    const PAID_BUT_OUT_OF = 4;

}