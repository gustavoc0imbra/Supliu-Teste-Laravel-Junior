<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;

class Faixa extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'nome',
        'duracao'
    ];
    
    public function Album(){
        return $this->belongsTo(Album::class);
    }
}
