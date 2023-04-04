<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;

class AboutUsController extends Controller
{
    public function index()
    {
        $about_us = About::get()->first();
        return $about_us;
        return view('Admin.about_us.index', compact('about_us'));
    }
}
