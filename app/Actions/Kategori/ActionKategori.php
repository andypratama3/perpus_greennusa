<?php

namespace App\Actions\Kategori;

use App\Models\Kategori;
use Illuminate\Http\Request;

class ActionKategori
{
    public function execute(Request $request, $kategori)
    {
        return Kategori::updateOrCreate(
            ['slug' => $kategori->slug],
            [
                'name' => $request->name,
            ]
        );
    }
}