<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //允许填充所有字段
//如果你想要让所有属性都是可批量赋值的，可以将 $guarded 属性设置为空数组：

    protected $guarded = [];

}
