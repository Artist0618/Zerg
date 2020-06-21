<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/21
 * Time: 10:05 下午
 */

namespace app\api\service;

//extend/WxPay/WxPay.Api.php
use think\Loader;

Loader::import('WxPay.WxPay', EXTEND_PATH, '.Api.php');
class WxNotify extends \WxPayNotify
{
    public function NotifyProcess($data, &$msg)
    {
        if ($data['result_code'] == 'SUCCESS'){

        }
    }
}