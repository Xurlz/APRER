@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Opções') }}</div>

                <div class="card-body">
                    <a href="{{route('teste_pontuacao')}}">Teste Pontuação</a>
                    <a href="{{route('teste_avaliacao')}}">Teste Avaliação</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
