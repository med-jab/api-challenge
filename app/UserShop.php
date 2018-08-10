<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserShop extends Model
{

    protected $table = 'user_shops';
    protected $fillable = [
        'user_id', 'shop_id', 'status',
    ];

}
