<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/19
 * Time: 9:25 下午
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;
}