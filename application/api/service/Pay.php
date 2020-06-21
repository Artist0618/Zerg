<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/20
 * Time: 7:22 上午
 */

namespace app\api\service;

use app\api\model\Order as OrderModel;
use app\api\service\Order as OrderService;
use app\lib\enum\OrderStatusEnum;
use app\lib\exception\OrderException;
use app\lib\exception\TokenException;
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
        //订单号可能根本不存在
        //订单号确实存在，但是订单号和当前用户是不匹配的
        //订单有可能已经被支付了
        //进行库存量检测
        $orderService = new OrderService();
        $status = $orderService->checkOrderStock($this->orderID);

    }

    private function checkOrderValid(){
        $order = OrderModel::where('id','=',$this->orderID)
            ->find();
        if(!$order){
            throw new OrderException();
        }
        if(!Token::isValidOperate($order->user_id)){
            throw new TokenException([
                'msg' => '订单与用户不匹配',
                'errorCode' => 10003
            ]);
        }
        if($order->status != OrderStatusEnum::UNPAID){
            throw new OrderException([
                'msg' => '订单已支付过了',
                'errorCode' => 80003,
                'code' => 400
            ]);
        }
    }
}