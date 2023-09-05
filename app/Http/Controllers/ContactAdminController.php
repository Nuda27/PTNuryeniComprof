<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Contact::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('message', function ($row) {
                    return '<p class="white-space">' . $row->message . '</p>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.contact.show', $row->id) . '"><i class="bx bx-show me-1"></i> Show</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'message'])
                ->make(true);
        }

        return view('pages.admin.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Contact::findOrFail($id);

        return view('pages.admin.contact.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Contact::find($id)->delete();

            return redirect()->route('admin.contact.index')->with('success', 'Pesan deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }

    }
}