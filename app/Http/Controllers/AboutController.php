<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = About::all();

            // white-space

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return '<p class="white-space">' . $row->title . '</p>';
                })
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
                              <a class="dropdown-item" href="' . route('admin.about.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'title', 'description', 'file'])
                ->make(true);
        }

        return view('pages.admin.about.index');
    }

    public function edit(string $id)
    {
        // get all services
        $about = About::findOrFail($id);
        return view('pages.admin.about.edit', compact('about'));
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
                $namaFolder2 = 'file/about';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;
                $data = About::where('id', $id)->first();
                File::delete($data->file);
                //echo $pathPublic2;
            } else {
                $pathPublic2 = $request->pathFile;
            }
            //update user with password
            $services = About::where("id", $id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $pathPublic2,
            ]);

            //echo $services;
            //redirect
            return redirect()->route('admin.about.index')->with('success', 'About updated successfully');
        } catch (\Throwable $th) {
            //return $th->getMessage();
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = About::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.about.index')->with('success', 'About deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
