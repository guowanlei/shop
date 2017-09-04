<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $guarded = [];//允许填充所有字段

     public function parent(){
         //一对多（逆向）关联 自关联belongsTo方法
     return $this->belongsTo(static::class,'pid',$this->getKeyName());

     }

}
