<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NewsLetterController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $news_letters = NewsLetter::latest()->get();
            return Datatables::of($news_letters)
                ->addColumn('action', function ($news_letters) {
                    return '
                                <button type="button" data-id="' . $news_letters->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $news_letters->id . '" data-title="' . $news_letters->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin/news_letters/index');
        }
    }

    public function destroy(Request $request)
    {
        $news_letters = NewsLetter::where('id', $request->id)->first();
        $news_letters->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
