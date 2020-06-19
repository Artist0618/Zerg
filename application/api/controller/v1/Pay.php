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

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' =>['only'=>'getPreOrder']
    ];

    public function getPreOrder($id=''){
        (new IDMustBePostiveInt())->goCheck();
    }
}