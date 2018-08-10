<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['sign_up', 'sign_in']);
    }

    //-----------------------------------------
    // Public routes :
    //-----------------------------------------

    /**
     * Sign Up
     */
    public function sign_up()
    {

    }

    /**
     * Sign In
     */
    public function sign_in()
    {

    }

    //-----------------------------------------
    // Auth routes :
    //-----------------------------------------

    /**
     * Sign Out.
     */
    public function sign_out()
    {

    }

    /**
     * Get user instance.
     */
    public function user()
    {

    }


}
