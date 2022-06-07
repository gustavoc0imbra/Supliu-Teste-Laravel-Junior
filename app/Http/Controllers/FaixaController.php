<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Faixa;

class FaixaController extends Controller
{
    public function adicionar(){
        $albuns = Album::all();

        return view('site.addfaixa', compact('albuns'));
    }

    public function create(Request $request, Faixa $faixa){
        $input = $request->validate([
            'nome' => 'string|required',
            'album_id' => 'string|required',
            'duracao' => 'string|required',
        ]);        
            
        $faixa->create($input);
        return redirect()->route('site.home');

    }
}
