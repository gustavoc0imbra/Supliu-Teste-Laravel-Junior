<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Faixa;

class AlbumController extends Controller
{
    //mostrar pagina para adicionar novo album
    public function cadastro(){
        $faixas = Faixa::all();

        return view('site.addalbum', compact('faixas'));
    }

    //receber dados
    public function adicionar(Request $request){

        $input = $request->validate([
            'nome' => 'string|required',
            'faixa_id' => 'int|nullable',
            'dataLancamento' => 'string|required',
        ]);

        Album::create($input);

        return redirect()->route('site.home');
    }

    //mostrar pagina para editar albuns
    public function edit(Album $album){
        return view('site.editalbum', compact('album'));
    }

    //salvar alteracoes banco
    public function update(Request $request, Album $album){
        $input = $request->validate([
            'nome' => 'string|required',
            'faixa_id' => 'int|nullable',
            'dataLancamento' => 'string|required',
        ]);

        $album->fill($input);
        $album->save();

        return redirect()->route('site.home');
    }

    public function destroy(Album $album){
        $album->delete();
        return redirect()->route('site.home');
    }
}
