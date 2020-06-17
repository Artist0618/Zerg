<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/17
 * Time: 11:09 下午
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效';
    public $errorCode = 10000;
}