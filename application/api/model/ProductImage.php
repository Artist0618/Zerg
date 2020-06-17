<?php
/**
 * Created by: PhpStorm
 * User: Artist
 * Date: 2020/6/17
 * Time: 11:47 下午
 */

namespace app\api\model;


use think\Model;

class ProductImage extends BaseModel
{
    protected $hidden = ['img_id', 'delete_time', 'product_id'];
    public function imgUrl()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}