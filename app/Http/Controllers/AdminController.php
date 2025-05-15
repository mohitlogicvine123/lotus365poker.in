<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /** Show dashboard */
    public function index()
    {
        return view('admin.dashboard');
    }

    /** Show create form */
    public function create()
    {
        return view('admin.admins.create');
    }

    /** Store new admin */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:admins',
            'password' => 'required|min:8|confirmed',
        ]);

        // Admin::create([...$validated, 'password' => bcrypt($validated['password'])]);
        return redirect()->route('admin.admins.index')->with('success', 'Admin created successfully');
    }

    /** Show single admin */
    public function show(string $id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.admins.show', compact('admin'));
    }

    /** Edit form */
    public function edit(string $id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.admins.edit', compact('admin'));
    }

    /** Update admin */
    public function update(Request $request, string $id)
    {
        $admin = Admin::findOrFail($id);

        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,'.$id,
        ]);

        $admin->update($validated);

        return redirect()->route('admin.admins.index')->with('success', 'Admin updated successfully');
    }

    /** Delete admin */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.admins.index')->with('success', 'Admin deleted successfully');
    }
}
