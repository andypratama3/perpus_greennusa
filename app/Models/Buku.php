<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    use \App\Http\Traits\HasSlug;
    protected $table = 'bukus';
    protected $fillable = [
        'name',
        'nama_penulis',
        'tahun_terbit',
        'penerbit',

    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
