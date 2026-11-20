<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    public function index()
    {
        $data['judul'] = 'CRUD data Pegawai';
        $data['employes'] = DB::table('employes')->get();

        return view('tampil_data', $data);
    }
}