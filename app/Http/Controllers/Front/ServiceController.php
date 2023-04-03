<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('site.services');
    }

    public function singleService()
    {
        return view('site.single_services');
    }
}
