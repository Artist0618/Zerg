<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/20
 * Time: 7:02 上午
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\IDMustBePostiveInt;
use app\api\service\Pay as PayService;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' =>['only'=>'getPreOrder']
    ];

    public function getPreOrder($id=''){
        (new IDMustBePostiveInt())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }

    public function receiveNotify(){
        //1、检查库存量，超卖
        //2、更新订单状态
        //3、减库存
        //如果成功处理，我们返回微信成功处理的信息。否则，我们需要返回没有成功处理。

        //特点：post :xml格式
    }
}