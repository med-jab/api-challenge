<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index']);
    }

    //-----------------------------------------
    // Public routes :
    //-----------------------------------------

    /**
     * Get All Shops
     */
    public function index()
    {

    }

    //-----------------------------------------
    // Auth routes :
    //-----------------------------------------

    /**
     * Get All Shops sorted by distance.
     */
    public function nearby()
    {

    }

    /**
     * Get all the user's preferred shops.
     */
    public function preferred()
    {

    }

    /**
     * Like shop.
     */
    public function like()
    {

    }

    /**
     * Dislike shop.
     */
    public function dislike()
    {

    }


    /**
     * Remove shop in preferred list.
     */
    public function remove()
    {

    }

}
