<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteContoller extends Controller
{
    public function index(){
        return view('bevasarlo.shoppingcart');
    }
}
