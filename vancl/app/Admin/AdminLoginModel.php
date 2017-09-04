<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AdminLoginModel extends User
{
    protected $rememberTokenName = '';
}
