<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use PhotoTrait;

    public function index(){
        $setting = Setting::first();
        return view('admin.settings.index',compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();

        if ($request->has('image')) {
            if (file_exists($setting->image)) {
                unlink($setting->image);
            }
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/settings');
        }

        if ($setting->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}//end class
