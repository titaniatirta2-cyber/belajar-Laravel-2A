<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['judul'] = 'CRUD Data Admin';
        $data['admins'] = Admin::all();

        return view('admin.tampil_admin', $data);
    }

    public function create()
    {
        $data['judul'] = 'Tambah Data Admin';

        return view('admin.tambah_admin', $data);
    }

    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->id_admin = $request->id_admin;
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->save();

        return redirect('/admin');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Admin';
        $data['admin'] = Admin::findOrFail($id);

        return view('admin.edit_admin', $data);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->username = $request->username;
        if ($request->filled('password')) {
            $admin->password = $request->password;
        }
        $admin->save();

        return redirect('/admin');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect('/admin');
    }
}