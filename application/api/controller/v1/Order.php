<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/18
 * Time: 11:09 下午
 */

namespace app\api\controller\v1;


use think\Controller;

class Order extends Controller
{
    //用户在选择商品后，想API提交包含他所选商品的相关信息
    //API在接收到信息后，需要检查订单相关商品的库存量
    //有库存，把订单数据存入数组中 = 下单成功，返回客户端消息，告诉客户端可以支付
    //调用支付接口，进行支付
    //还需要再次进行库存检测
    //服务器这边就可以调用微信的支付接口进行支付
    //微信会返回一个支付的结果
    //成功：进行库存量扣除，失败：返回一个支付失败的结果

    public function placeOrder(){

    }
}