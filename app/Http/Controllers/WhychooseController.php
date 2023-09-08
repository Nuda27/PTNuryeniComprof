<?php

namespace App\Http\Controllers;

use App\Models\Whychoose;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class WhychooseController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Whychoose::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('description', function ($row) {
                    return '<p class="white-space">' . $row->description . '</p>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.whychoose.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'description'])
                ->make(true);
        }
        return view('pages.admin.whychoose.index');
    }

    public function create()
    {
        return view('pages.admin.whychoose.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {

            $data = count($request->title);
            for ($i=0; $i < $data ; $i++) {
                // create user
            Whychoose::create([
                'title' => $request->title[$i],
                'description' => $request->description[$i],
            ]);
            }


            //echo $service;
            //redirect
            return redirect()->route('admin.whychoose.index')->with('success', 'WhyChoose created successfully');
        } catch (\Throwable $e) {
            //return $e->getMessage();
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get all
        //lama
        // $whychoose = Whychoose::findOrFail($id);
        // return view('pages.admin.whychoose.edit', compact('whychoose'));

        // baru
        $whychoose = Whychoose::findOrFail($id);
        $data = Whychoose::all();

        return view('pages.admin.whychoose.edit', compact('whychoose','data'));
    }

    public function update(Request $request, $id)
    {
        // lama
        // $request->validate([
        //     'title[]' => 'required|max:255',
        //     'description[]' => 'required|max:255',
        // ]);

        // try {
        //     //update user with password
        //     Whychoose::where("id", $id)->update([
        //         'title' => $request->title,
        //         'description' => $request->description,
        //     ]);

        //     //echo $services;
        //     //redirect
        //     return redirect()->route('admin.whychoose.index')->with('success', 'WhyChoose updated successfully');

        // } catch (\Throwable $th) {
        //     //return $th->getMessage();
        //     return back()->with(['error' => 'Data gagal diperbarui.']);
        // }

        //baru
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {
            $data = count($request->id);
            for ($i=0; $i < $data ; $i++) {

                //update user with password
                Whychoose::where("id", $request->id[$i])->update([
                    'title' => $request->title[$i],
                    'description' => $request->description[$i],
                ]);
            }
            //echo $services;
            //redirect
            return redirect()->route('admin.whychoose.index')->with('success', 'WhyChoose updated successfully');

        } catch (\Throwable $th) {
            //return $th->getMessage();
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = Whychoose::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.services.index')->with('success', 'WhyChoose deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
