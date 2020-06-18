<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/18
 * Time: 10:02 下午
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = ['id','delete_time','user_id'];
}