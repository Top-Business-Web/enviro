<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::all();
        $data['services'] = Service::all();
        return view('site.index', compact('data'));
    }
}
