<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('site.blog');
    }

    public function blogDetails()
    {
        return view('site.blog-details');
    }
}
