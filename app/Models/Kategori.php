<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    use \App\Http\Traits\HasSlug;
    protected $table = 'kategoris';
    protected $fillable = [
        'name',
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
