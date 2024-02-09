<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        return view('website.home');
    }

    public function product_details(){
        return view('website.pages.product-detail');
    }
}
