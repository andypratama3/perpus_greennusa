<?php

namespace App\Actions\Kategori;

use App\Models\Kategori;


class ActionKategoriDelete
{
    public function execute($slug)
    {
    $kategori = Kategori::where('slug', $slug)->first;
    $kategori->delete();

    }
}
