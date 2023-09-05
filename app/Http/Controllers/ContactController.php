<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * contact
     *
     * @return void
     */
    public function index()
    {
        return view('pages.landingPage.contact');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:12|numeric',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'phone.required' => 'Nomor telepon harus diisi.',
            'phone.digits' => 'Nomor telepon harus terdiri dari 12 digit.',
            'phone.numeric' => 'Nomor telepon harus berupa angka.',
            'subject.required' => 'Subjek pesan harus diisi.',
            'message.required' => 'Pesan harus diisi.',
        ]);

        try {
            DB::beginTransaction();

            // simpan kedatabase
            $item = Contact::create($request->all());

            //send email
            $adminEmail = "muhamadazis9a@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));

            DB::commit();

            return redirect()->back()->with(['success' => 'Terima kasih telah menghubungi kami. kami akan segera menghubungi Anda.']);

        } catch (\Throwable $th) {
            DB::rollback();

            return back()->with(['error' => 'Pesan gagal dikirim.']);

        }
    }
}
