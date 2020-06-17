<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/17
 * Time: 11:49 下午
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden=['product_id', 'delete_time', 'id'];
}