<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    protected $guarded = [];//允许填充所有字段
    protected $rememberTokenName = '';
}
