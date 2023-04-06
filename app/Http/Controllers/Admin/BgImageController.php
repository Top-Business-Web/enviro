<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBgImage;
use App\Models\BgImage;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BgImageController extends Controller
{
    use PhotoTrait;

    public function index(){
        $background_image = DB::table('bg_images')->pluck('images')->toArray();
//        $images = json_decode($background_image["images"], true);
        return $background_image;
        return view('admin.bg_images.index', ['$images' => $images]);

    }
//DB::table('images')->where('id', $id)->update(['image' => $imagePath]);

    public function update(UpdateBgImage $request)
    {
        $background_image = BgImage::findOrFail($request->id);

        $inputs = $request->all();

        if($request->has('files')){
            foreach($request->file('files') as $file)
            {
                $inputs['images'][] = $this->saveImage($file,'assets/admin/bgImages','photo');
            }
        }

        if ($background_image->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
