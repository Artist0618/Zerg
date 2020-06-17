<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/17
 * Time: 10:48 下午
 */

namespace app\api\service;


class Token
{
    public static function generateToken(){
        //32个字符组成一组随机字符串
        $randChars = getRandChar(32);
        //用三组字符串，进行md5加密
        $timestamp = $_SERVER['REQUEST_TIME'];
        //salt 盐
        $salt = config('secure.token_salt');
        return md5($randChars.$timestamp.$salt);
    }
}