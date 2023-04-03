<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('site.products');
    }

    public function singleProduct()
    {
        return view('site.single-products');
    }
}
