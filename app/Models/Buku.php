<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $table = ['bukus'];
    protected $guarded = ['id'];
    protected $fillable = [
    ];

}
