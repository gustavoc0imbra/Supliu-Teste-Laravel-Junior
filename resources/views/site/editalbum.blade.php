@extends('site.layout.base')

@section('titulo')
    Discografia - Tião Carreiro e Pardinho - Editar
@endsection

@section('content')
    <br>
        <div id="baseBranca" class="container" style="margin: auto;width: 50%;">
            <div id="menuBase" class="row">
                <div class="col col-lg-4">
                    <img src="{{asset('img/logo.png')}}">
                </div>
                <div class="col col-lg-6 float-end">
                    <p class="float-end" id="pTexto">Discografia</p>
                </div>
                </div>
            </div>
            <div id="fundo" class="container" style="margin: auto;width: 50%;">
                <div id="content" class="row">
                      <center>
                            <form class="row g-3 w-50" action="{{ route('site.updatealbum') }}" method="POST">
                                @csrf
                                @method('put')
                                    <div class="col-md-6">
                                        <label for="inputAlbum4" class="form-label">Album</label>
                                        <input type="text" class="form-control" id="inputAlbum4" name="nome" placeholder="{{ $album['nome'] }}">
                                        @error('nome')
                                            <p class="text-danger"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    
                                    <br>
                                    <div class="col-12 w-50">
                                        <label for="inputAddress" class="form-label">Ano de Lançamento</label>
                                        <input type="text" class="form-control" id="inputAddress" name="dataLancamento" placeholder="{{ $album['dataLancamento'] }}">
                                        @error('dataLancamento')
                                            <p class="text-danger"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    {{-- @if(empty($faixas['album_id']))
                                        @foreach ($faixas as $faixas)
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="faixa_id" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        </label>
                                                    </div>
                                            </div>
                                        @endforeach
                                    @endif --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Editar</button>
                                    </div>
                            </form>
                        </center>  
                </div>
                <a href="/"><button class="btn btn-primary">Voltar</button></a>
        </div>
@endsection