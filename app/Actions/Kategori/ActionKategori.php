<?php

namespace App\Actions\Kategori;

use App\Models\Kategori;
use Symfony\Component\HttpFoundation\Request;


class ActionKategori
{
    public function execute(Request $request)
    {
    $kategori = Kategori::updateOrCreate(
        [
            'name' => $request->name,
        ]);
    $kategori->save();

    }
}
