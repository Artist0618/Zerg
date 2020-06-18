<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/19
 * Time: 6:59 上午
 */
namespace app\api\controller;

use app\api\service\Token as TokenService;
use think\Controller;

class BaseController extends Controller
{
    protected function checkPrimaryScope(){
        TokenService::needPrimaryScope();
    }

    protected function checkExclusiveScope(){
        TokenService::needExclusiveScope();
    }
}