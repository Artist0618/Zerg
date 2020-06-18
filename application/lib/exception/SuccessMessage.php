<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/18
 * Time: 9:21 下午
 */

namespace app\lib\exception;


class SuccessMessage extends BaseException
{
    public $code = 201;
    public $msg = 'ok';
    public $errorCode = 0;
}