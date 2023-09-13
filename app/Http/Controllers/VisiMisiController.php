<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class VisiMisiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = VisiMisi::all();

            // white-space
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return '<p class="white-space">' . $row->title . '</p>';
                })
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
                              <a class="dropdown-item" href="' . route('admin.visimisi.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'title', 'description', 'file'])
                ->make(true);
        }

        return view('pages.admin.visimisi.index');
    }

    public function create()
    {
        return view('pages.admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required|max:255',
            'misi' => 'required|max:255',
        ]);

        try {
            VisiMisi::create([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
            return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi created successfully');
        } catch (\Throwable $e) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get all users
        $visimisi = VisiMisi::findOrFail($id);
        return view('pages.admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required|max:255',
            'misi' => 'required|max:255',
        ]);

        try {
            VisiMisi::where("id", $id)->update([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
            return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi updated successfully');
        } catch (\Throwable $e) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = VisiMisi::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
