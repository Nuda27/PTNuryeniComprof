<?php

namespace App\Http\Controllers;

use App\Models\OfficeProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OfficeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get data
        $profile = OfficeProfile::first();

        return view('pages.admin.officeProfile.index', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:office_profiles|email',
            'telepon' => 'required|max:15',
            'alamat' => 'required',
            'whatsapp' => 'required|regex:/^[0-9]{10,12}$/',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'youtube' => 'nullable',
            'maps' => 'nullable',
            'logo' => 'required|mimes:png,jpg,png|max:2048',
            'about' => 'nullable',
        ], [
            'whatsapp.regex' => 'Format no WA tidak valid (10 - 12 digit angka)',
        ]);

        try {

            // logo
            $file = $request->file('logo');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/profilePT';
                $file->move($namaFolder2, $nama_file);
                $logo = $namaFolder2 . "/" . $nama_file;
            } else {
                $logo = null;
            }

            OfficeProfile::create([
                'name' => $request->name,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'whatsapp' => $request->whatsapp,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'maps' => $request->maps,
                'about' => $request->about,

                'logo' => $logo,
            ]);

            //redirect
            return redirect()->route('admin.office-profile.index')->with('success', 'User created successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data updated successfully']);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OfficeProfile $officeProfile)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:office_profiles,email,' . $officeProfile->id,
            'telepon' => 'required|max:15',
            'alamat' => 'required',
            'whatsapp' => 'required|regex:/^[0-9]{10,12}$/',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'youtube' => 'nullable',
            'maps' => 'nullable',
            'logo' => 'nullable|mimes:png,jpg,png|max:2048',
            'about' => 'nullable',
        ], [
            'whatsapp.regex' => 'Format no WA tidak valid (10 - 12 digit angka)',
        ]);

        try {
            // cek logo
            $file = $request->file('logo');

            //logo
            if (file_exists($file)) {
                // create
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/profilePT';
                $file->move($namaFolder2, $nama_file);
                $logo = $namaFolder2 . "/" . $nama_file;

                // delete logo
                File::delete($officeProfile->logo);

            } else {
                $logo = $officeProfile->logo;
            }

            $officeProfile->update([
                'name' => $request->name,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'whatsapp' => $request->whatsapp,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'maps' => $request->maps,
                'about' => $request->about,

                'logo' => $logo,
            ]);

            //redirect
            return redirect()->route('admin.office-profile.index')->with('success', 'Data updated successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }

    }

}