<?php

namespace App\Actions\Kategori;

use App\Models\Kategori;


class ActionKategoriDelete
{
    public function execute($kategori)
    {
        $kategori->delete();
    }
}
