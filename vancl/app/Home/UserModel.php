<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class UserModel extends User
{
    protected $guarded = [];//不允许填充所有字段
    protected $rememberTokenName = '';
}
