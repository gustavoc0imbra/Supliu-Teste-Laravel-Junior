@extends('site.layout.base')

@section('titulo')
    Discografia - Tião Carreiro e Pardinho - Index
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
                <div id="content" class="row ">
                        <div class="col">
                            <a href="{{ route('site.home') }}"><button class="btn btn-primary">Lista de Albuns</button></a>
                            <a href="{{ route('site.cadalbum') }}"><button class="btn btn-primary">Adicionar Album</button></a>
                            <a href="{{ route('site.addfaixa') }}"><button class="btn btn-primary">Adicionar Faixa</button></a>
                        </div>
                </div>
        </div>
@endsection