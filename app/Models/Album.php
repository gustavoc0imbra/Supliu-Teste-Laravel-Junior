<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faixa;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'dataLancamento',
    ];

    public function faixas(){
        return $this->hasMany(Faixa::class, 'album_id', 'id');
    }

}
