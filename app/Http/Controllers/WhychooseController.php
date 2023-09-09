<?php

namespace App\Http\Controllers;

use App\Models\Whychoose;
use App\Models\whychooseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class WhychooseController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Whychoose::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('subtitle', function ($row) {
                    return '<p class="white-space">' . $row->subtitle . '</p>';
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
                              <a class="dropdown-item" href="' . route('admin.whychoose.show', $row->id) . '"><i class="bx bx-show me-1"></i> Detail</a>
                              <a class="dropdown-item" href="' . route('admin.whychoose.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'subtitle'])
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
            'title2' => 'required|string|max:50',
            'subtitle' => 'required|string|max:100',
            'file' => 'required|mimes:png,jpg,png|max:2048',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {
            DB::beginTransaction();

            // jika upload file
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/whychoose';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            // create wheychose
            $whychoose = Whychoose::create([
                'title' => $request->title2,
                'subtitle' => $request->subtitle,
                'file' => $pathPublic,
            ]);

            // create detail
            $data = count($request->title);
            for ($i = 0; $i < $data; $i++) {

                whychooseDetail::create([
                    'whychoose_id' => $whychoose->id,
                    'title' => $request->title[$i],
                    'description' => $request->description[$i],
                ]);
            }

            DB::commit();
            return redirect()->route('admin.whychoose.index')->with('success', 'WhyChoose created successfully');

        } catch (\Throwable $e) {
            DB::rollBack();
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get
        $whychoose = Whychoose::findOrFail($id);

        return view('pages.admin.whychoose.edit', compact('whychoose'));
    }

    public function update(Request $request, Whychoose $whychoose)
    {
        //validate
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
                $namaFolder2 = 'file/whychoose';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;

                // delete
                File::delete($whychoose->file);

            } else {
                $pathPublic2 = $whychoose->file;
            }

            // update
            $whychoose->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'file' => $pathPublic2,
            ]);

            return redirect()->route('admin.whychoose.index')->with('success', 'WhyChoose updated successfully');

        } catch (\Throwable $th) {
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

            return redirect()->route('admin.whychoose.index')->with('success', 'WhyChoose deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get
        $whychoose = Whychoose::findOrFail($id);

        // get detail
        $whychooseDetail = whychooseDetail::where('whychoose_id', $whychoose->id)->get();

        return view('pages.admin.whychoose.show', compact('whychoose', 'whychooseDetail'));
    }

    /**
     * createWhyItem
     *
     * @param  mixed $id
     * @return void
     */
    public function createWhyItem(string $id)
    {
        // get
        $whychoose = Whychoose::findOrFail($id);

        return view('pages.admin.whychoose.detail.create', compact('whychoose'));
    }

    /**
     * storeWhyItem
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function storeWhyItem(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {

            whychooseDetail::create([
                'whychoose_id' => $id,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.whychoose.show', $id)->with('success', 'WhyChoose Item created successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }

    }

    /**
     * editWhyItem
     *
     * @param  mixed $whychoose
     * @param  mixed $whychooseDetail
     * @return void
     */
    public function editWhyItem(Whychoose $whychoose, whychooseDetail $whychooseDetail)
    {
        return view('pages.admin.whychoose.detail.edit', compact('whychoose', 'whychooseDetail'));
    }

    /**
     * updateWhyItem
     *
     * @param  mixed $request
     * @param  mixed $whychoose
     * @param  mixed $whychooseDetail
     * @return void
     */
    public function updateWhyItem(Request $request, Whychoose $whychoose, whychooseDetail $whychooseDetail)
    {
        //validate
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {

            // update
            $whychooseDetail->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.whychoose.show', $whychoose->id)->with('success', 'WhyChoose updated successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

}

// =======================================================

// VERSI LAMA
// public function update(Request $request, $id)
// {
//     //validate
//     $request->validate([
//         'title2' => 'required|string|max:50',
//         'subtitle' => 'required|string|max:100',
//         'file' => 'nullable|mimes:png,jpg,png|max:2048',
//         'title' => 'required|max:255',
//         'description' => 'required|max:255',
//     ]);

//     try {
//         $data = count($request->id);
//         for ($i = 0; $i < $data; $i++) {

//             //update user with password
//             Whychoose::where("id", $request->id[$i])->update([
//                 'title' => $request->title[$i],
//                 'description' => $request->description[$i],
//             ]);
//         }

//         return redirect()->route('admin.whychoose.index')->with('success', 'WhyChoose updated successfully');

//     } catch (\Throwable $th) {
//         return back()->with(['error' => 'Data gagal diperbarui.']);
//     }
// }