@extends('site.layout.base')

@section('titulo')
    Discografia - Tião Carreiro e Pardinho - Home
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
                        <div class="col">
                        <br>
                            <p>Digite uma palavra chave</p>
                            <form id="forms" action="{{ route('site.home') }}" method="GET" class="form-control">
                                <input id="barraPesq" name="search" type="search" class="form-label" placeholder="Palavra-chave"> <input id="btnProc" type="submit" class="text-light float-end" value="Procurar">
                            </form>
                    </div>
                </div>
                <div class="row">
                    @if ($albumsearch)
                        Albuns encontrados por: {{ $albumsearch }} 
                    @else
                        Albuns na Discografia <br>
                    @endif
                    @isset($albuns)
                        @foreach ($albuns as $indices => $album)
                            <strong>Álbum: {{$album['nome']}}, {{$album['dataLancamento']}}</strong> <a href="{{ route('site.editalbum', $album['id']) }}">Editar</a> <a href="{{ route('site.destroyalbum', $album['id']) }}">Excluir</a>
                            <br>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Faixa</th>
                                        <th>Duração</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    @endisset
                    @empty($albuns)
                        <h1>->Não há registros no BD</h1>
                    @endempty
                </div>
                <a href="/"><button class="btn btn-primary">Voltar</button></a>
        </div>
@endsection