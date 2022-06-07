<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faixas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'album_id'
    ];
}
