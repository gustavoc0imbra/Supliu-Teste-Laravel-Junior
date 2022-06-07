@extends('site.layout.base')

@section('content')
    <center>
    <form class="row g-3 w-50" action="{{ route('site.addalbum') }}" method="POST">
        @csrf
            <div class="col-md-6">
                <label for="inputAlbum4" class="form-label">Album</label>
                <input type="text" class="form-control" id="inputAlbum4" name="nome" placeholder="Nome do Album">
                @error('nome')
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
            <br>
            <div class="col-12 w-50">
                <label for="inputAddress" class="form-label">Ano de Lançamento</label>
                <input type="text" class="form-control" id="inputAddress" name="dataLancamento" placeholder="--/--/----">
                @error('nome')
                    <p class="text-danger"> {{ $message }} </p>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
</form>
                <a href="/"><button class="btn btn-primary">Voltar</button></a>

</center>
@endsection
