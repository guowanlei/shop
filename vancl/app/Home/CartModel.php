<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Goods;
class CartModel extends Model
{
    protected $guarded = [];

    public function goods()
    {
        return $this->hasOne(Goods::class,'id','goods_id');

    }
}
