<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Session::get('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Find admin by email
        $admin = Admin::where('email', $credentials['email'])->first();

        if ($admin) {
            // Check password using Laravel Hash facade
            if (Hash::check($credentials['password'], $admin->password)) {
                // Password matches, set session and redirect
                Session::put('admin_logged_in', true);
                Session::put('admin_id', $admin->id);

                return redirect()->route('admin.dashboard')->with('success', 'Login successful');
            } else {
                // Password mismatch
                return back()->withErrors(['password' => 'Invalid password'])->withInput();
            }
        } else {
            // Admin with this email not found
            return back()->withErrors(['email' => 'Admin not found with this email'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Session::forget('admin_logged_in');
        Session::forget('admin_id');

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('status', 'You have been logged out');
    }
}
