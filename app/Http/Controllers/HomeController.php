<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Faixa;

class HomeController extends Controller
{
    
    
    public function index(){
        return view('site.index');
    }
    
    public function show(Request $request){
        
        $albumsearch = $request->input('search');

        if($albumsearch){
             $albuns = Album::Where('nome', 'LIKE', '%'.$albumsearch.'%')->get();
        }else{
            $albuns = Album::all();
            /* $faixas = $albuns->faixas()->get(); */
        }

        return view('site.home', compact('albuns'), compact('albumsearch'), /* compact('faixas') */);
    }
}
