<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PortofolioController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'pesans'
        $pesans = Pesan::all();

        // Kirim data ke view 'portofolio.blade.php'
        return view('portofolio', compact('pesans'));
    }
}
