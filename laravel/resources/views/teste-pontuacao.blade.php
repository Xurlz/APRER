@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pontuação') }}</div>

                <div class="card-body">
                    {{Auth::user()->reputation}}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-mr-1">
            <form method="post" action="{{route('adiciona_ponto')}}">
                @csrf
                <button type = 'submit'>Adiciona Ponto</button>
            </form>
        </div>

        <div class="col-mr-1">
            <form method="post" action="{{route('reenicia_ponto')}}">
                @csrf
                <button type = 'submit'>Reenicia Ponto</button>
            </form>
        </div>

        <div class="col-mr-1">
            <form method="post" action="{{route('reduz_ponto')}}">
                @csrf
                <button type = 'submit'>Reduz Ponto</button>
            </form>
        </div>
    </div>        
</div>
@endsection
