<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Kategori\ActionKategori;
use App\Actions\Kategori\ActionKategoriDelete;
use App\Http\Requests\Dashboard\RequestKategori;

class KategoriController extends Controller
{
    public function index()
    {
        $no = 1;
        $kategoris = Kategori::select(['name','slug'])->get();
        return view('dashboard.kategori.index', compact('kategoris','no'));
    }
    public function create()
    {
        return view('dashboard.kategori.create');
    }
    public function store(RequestKategori $request, ActionKategori $actionKategori)
    {
        $actionKategori->execute($request);
        return redirect()->route('dashboard.kategori.index')->with('success','Kategori Berhasil Di Tambahkan');
    }
    public function edit($slug)
    {
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        return view('dashboard.kategori.edit', compact('kategori'));

    }
    public function update(RequestKategori $request, ActionKategori $actionKategori)
    {
        $actionKategori->execute($request);
        return redirect()->route('dashboard.kategori.index')->with('success','Kategori Berhasil Di Update');
    }
    public function destroy(ActionKategoriDelete $actionKategoriDelete,$slug)
    {
        $actionKategoriDelete->execute($slug);
        return redirect()->route('dashboard.kategori.index')->with('success','Kategori Berhasil Di Hapus');
    }


}
