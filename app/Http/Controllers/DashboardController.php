<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Halaman Home / Dashboard
    public function home() {
        $data['judul'] = 'Laman Home'; 
        $data['isi'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; 
        return view('home', $data);
    }

   public function gallery() {
    $data['judul'] = 'Laman Gallery';
    return view('gallery', $data);
}

    // Tambahkan method ini agar errornya hilang
    public function adminDashboard() {
        $data['judul'] = 'Laman Dashboard Admin'; 
        $data['isi'] = 'Selamat datang di halaman dashboard utama.'; 
        return view('dashboard', $data);
    }

    // Halaman Product
    public function product() {
        return view('product');
    }

    // Halaman About
    public function about() {
        return view('about');
    }

    // Halaman Detail Produk Berdasarkan Harga (URL Parameter)
    public function detail($harga) {
        return view('detail', ['harga' => $harga]);
    }

}