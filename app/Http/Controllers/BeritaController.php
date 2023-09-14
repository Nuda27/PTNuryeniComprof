<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Berita::all();

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
                              <a class="dropdown-item" href="' . route('admin.news.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'description', 'title'])
                ->make(true);
        }
        return view('pages.admin.berita.index');
    }

    public function create()
    {
        return view('pages.admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'file' => 'required',
        ]);

        try {
            // create user
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/news';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            Berita::create([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $pathPublic,
            ]);
            return redirect()->route('admin.news.index')->with('success', 'News created successfully');
        } catch (\Throwable $e) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get all services
        $news = Berita::findOrFail($id);
        return view('pages.admin.berita.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'file' => '',
        ]);

        try {
            //check passwordy
            $file = $request->file('file');
            //echo $file;
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/news';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;
                $data = Berita::where('id', $id)->first();
                File::delete($data->file);
                echo $pathPublic2;
            } else {
                $pathPublic2 = $request->pathFile;
            }
            //update user with password
            Berita::where("id", $id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $pathPublic2,
            ]);
            return redirect()->route('admin.news.index')->with('success', 'News updated successfully');
        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = Berita::find($id);
            // delete data
            $data->delete();
            // delete file
            File::delete($data->file);
            return redirect()->route('admin.news.index')->with('success', 'News deleted successfully');
        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}