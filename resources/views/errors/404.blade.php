@extends('layouts.bodyError')

@section('titleError', 'Erro 404 - ヽ(ຈل͜ຈ)ﾉ︵ ┻━┻')

@section('messageError')
    <h2>{{ $exception->getMessage() }}</h2>
    <p class="text-center lead">Cette page n'existe pas on dirait... Mais vous pouvez écouter ça si vous souhaitez rester ici ¯\_(ツ)_/¯</p>
@endsection

@section('returnError')
    <div class="title">
        Vous pouvez aussi retourner au menu principal <a href="{{ url('/') }}">par ici</a>.
    </div>
@endsection