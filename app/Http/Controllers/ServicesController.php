<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Services::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('description', function ($row) {
                    return '<p class="white-space">' . $row->description . '</p>';
                })
                ->addColumn('file', function ($row) {
                    $image = '<img src="' . asset($row->file) . '" width="50px">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.services.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'description'])
                ->make(true);
        }
        return view('pages.admin.services.index');
    }

    public function create()
    {
        return view('pages.admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|max:255',
            'file' => 'required',
        ]);

        try {
            // create user
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/services';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            $service = Services::create([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $pathPublic,
            ]);

            //echo $service;
            //redirect
            return redirect()->route('admin.services.index')->with('success', 'Services created successfully');
        } catch (\Throwable $e) {
            //return $e->getMessage();
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get all services
        $services = Services::findOrFail($id);
        return view('pages.admin.services.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|max:255',
            'file' => '',
        ]);

        try {
            //check passwordy
            $file = $request->file('file');
            //echo $file;
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/services';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;
                $data = Services::where('id', $id)->first();
                File::delete($data->file);
                echo $pathPublic2;
            } else {
                $pathPublic2 = $request->pathFile;
            }
            //update user with password
            $services = Services::where("id", $id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $pathPublic2,
            ]);

            //echo $services;
            //redirect
            return redirect()->route('admin.services.index')->with('success', 'Services updated successfully');

        } catch (\Throwable $th) {
            //return $th->getMessage();
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }

    }

    public function destroy($id)
    {
        try {
            $data = Services::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.services.index')->with('success', 'Services deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
