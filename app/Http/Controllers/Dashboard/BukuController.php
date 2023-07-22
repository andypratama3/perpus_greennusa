<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::select('name','nama_penulis','tahun_terbit','penerbit','slug')->get();
        return view('dashboard.buku.index', compact('bukus'));
    }
}
