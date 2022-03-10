<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteContoller extends Controller
{
    /*
        Visszaadja a tábla nézetét.
    */
    public function index(){
        return view('bevasarlo.shoppingcart');
    }
}
