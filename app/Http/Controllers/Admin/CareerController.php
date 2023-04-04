<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareer;
use App\Models\Career;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CareerController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $careers = Career::latest()->get();
            return Datatables::of($careers)
                ->addColumn('action', function ($careers) {
                    return '
                                <button type="button" data-id="' . $careers->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $careers->id . '" data-title="' . $careers->name . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin/careers/index');
        }
    }

    public function create()
    {
        return view('Admin/careers/parts/create');
    }

    public function store(StoreCareer $request)
    {
        try {
            $inputs = $request->all();

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/careers/pdfs', $filename);
                $inputs['file'] = $filename;
            }

            if (Career::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Career $career)
    {
        return view('Admin/careers/parts/edit', compact('career'));
    }

    public function update(Request $request, $id)
    {
        try {
            $career = Career::findOrFail($id);
            $inputs = $request->all();

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/careers/pdfs', $filename);
                $inputs['file'] = $filename;
            }

            if ($career->update($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        $careers = Career::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
