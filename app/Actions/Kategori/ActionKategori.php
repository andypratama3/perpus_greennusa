<?php

namespace App\Actions\Kategori;

use App\Models\Kategori;
use Illuminate\Http\Request;

class ActionKategori
{
    public function execute(Request $request, $slug)
    {
        $kategori = Kategori::updateOrCreate(
            ['slug' => $slug],
            [
                'name' => $request->name,
            ]
        );
    }
}