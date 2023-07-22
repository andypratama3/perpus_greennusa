<?php

namespace App\Actions\Kategori;

use App\Models\Kategori;


class ActionKategoriDelete
{
    public function execute(Kategori $kategori)
    {
        $kategori->delete();
    }
}
