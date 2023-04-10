<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        $data['sub_categories'] = SubCategory::all();
        return view('site.products', compact('data'));
    }

    public function singleProduct($id)
    {
        $data['products'] = Product::all();
        $data['product'] = Product::find($id);
        $data['related'] = Product::where('sub_categories_id', $id)->get();
         return view('site.single-products', compact('data'));
    }
}
