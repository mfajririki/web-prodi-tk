<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuans extends Model
{
    use HasFactory;

    protected $table = 'tujuan';
    protected $fillable = [
        'konten_tujuan',
    ];
}
