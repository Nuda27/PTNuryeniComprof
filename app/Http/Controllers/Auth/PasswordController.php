<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:7',
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            $request->user()->update([
                'password' => Hash::make($request->password),
            ]);

            return back()->with('success', 'password-updated');
        } else {
            return back()->with('error', 'Password lama salah.');
        }

    }
}