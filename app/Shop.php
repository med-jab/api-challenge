<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    /**
     * Information Model.
     */
    protected $table = 'shops';
    protected $fillable = [
        'title', 'description', 'image', 'distance',
    ];

    /**
     * The users that belong to the shop.
     */
    /*public function users()
    {
        return $this->belongsToMany('App\User', 'user_shops', 'shop_id', 'user_id');
    }*/

}
