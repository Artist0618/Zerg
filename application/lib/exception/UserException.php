<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/18
 * Time: 8:37 下午
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}