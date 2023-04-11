<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        return view('site.quotation');
    }

    public function storeQuote(Request $request)
    {
        $inputs = $request->all();

        if(Quote::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
