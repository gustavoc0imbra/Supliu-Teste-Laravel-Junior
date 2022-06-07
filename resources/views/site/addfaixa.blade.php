@extends('site.layout.base')

@section('titulo')
    Discografia - Tião Carreiro e Pardinho - Add Faixa
@endsection

@section('content')
    <center>
        <form class="row g-3 w-50" action="{{ route('site.createfaixa') }}" method="POST">
        @csrf
            <div class="col-md-6">
                <label for="inputAlbum4" class="form-label">Faixa</label>
                <input type="text" class="form-control" id="inputAlbum4" name="nome" placeholder="Nome da Faixa">
                @error('nome')
                    <p class="text-danger"> {{ $message }} </p>
                @enderror
            </div>
            <br>
            <div class="col-md-6">
                <div class="form-text">
                    <label class="form-label">
                        Id do Album
                        </label>
                    <input type="text" class="form-control" id="inputAlbum4" name="album_id" placeholder="Digite o Id de album que queira adicionar a faixa">
                    @error('album_id')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>
            </div>
                @foreach ($albuns as $albuns)
                    <table class="table table-dark w-50">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ $albuns['id'] }}</td>
                            <td>{{ $albuns['nome'] }}</td>
                        </tbody>
                    </table>
                    {{-- <br>  --}}
                @endforeach
            <br>
            <center>
            <div class="col-12 w-50">
                <label for="inputAddress" class="form-label">Duração</label>
                <input type="text" class="form-control" id="inputAddress" name="duracao" placeholder="00:00">
                @error('duracao')
                    <p class="text-danger"> {{ $message }} </p>
                @enderror
            </div>
            </center>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
    </form>
    <a href="/"><button class="btn btn-primary">Voltar</button></a>

</center>
@endsection
