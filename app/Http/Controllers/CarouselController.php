<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Carousel::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('subtitle', function ($row) {
                    return '<p class="white-space">' . $row->subtitle . '</p>';
                })
                ->addColumn('file', function ($row) {
                    if ($row->file) {
                        $image = '<img src="' . asset($row->file) . '" width="50px">';
                    } else {
                        $image = '<img src="' . asset('assetsLanding/img/placeholder.jpg') . '" width="50px">';
                    }
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.carousel.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'subtitle'])
                ->make(true);
        }
        return view('pages.admin.carousel.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'subtitle' => 'required|string|max:100',
            'file' => 'required|mimes:png,jpg,png|max:2048',
        ]);

        try {
            // jika upload file
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/carousel';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            Carousel::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'file' => $pathPublic,
            ]);

            return redirect()->route('admin.carousel.index')->with('success', 'Carousel created successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carousel = Carousel::findOrFail($id);

        return view('pages.admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'subtitle' => 'required|string|max:100',
            'file' => 'nullable|mimes:png,jpg,png|max:2048',
        ]);


        try {

            // jika upload file
            $file = $request->file('file');
            if (file_exists($file)) {

                //create
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/carousel';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;

                // delete
                File::delete($carousel->file);

            } else {
                $pathPublic2 = $carousel->file;
            }

            // update
            $carousel->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'file' => $pathPublic2,
            ]);

            return redirect()->route('admin.carousel.index')->with('success', 'Carousel updated successfully');
        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $data = Carousel::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.carousel.index')->with('success', 'Carousel deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}