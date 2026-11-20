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

    public function create() { 
        $data['judul'] = 'Tambah data Pegawai';
        return view('tambah_data',$data); 
    }

    public function store(Request $request) { 
        //ambil data di form 
        $employe = new Employe; 

        $employe->id = $request->id; 
        $employe->nama = $request->nama; 
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
         $employe->gaji = $request->gaji;     
         
         //simpan dalam database     
         $employe->save();     
         
         //jika berhasil kembali ke tampil data   
         return redirect('/employe'); } 
}