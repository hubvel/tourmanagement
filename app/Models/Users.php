<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'email', 'f_name', 'l_name', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
