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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Barra de progresso') }}</div>

                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{Auth::user()->reputation*10}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-mr-1">
            <form method="post" action="{{route('atualiza_pontuacao')}}">
                @csrf
                @php
                $tipo = 'adiciona';
                @endphp
                <input name='tipo' value='{{$tipo}}' type = 'hidden'>
                <input type='submit' value='{{$tipo}}'>
            </form>
        </div>

        <div class="col-mr-1">
            <form method="post" action="{{route('atualiza_pontuacao')}}">
                @csrf
                @php
                $tipo = 'reenicia';
                @endphp
                <input name='tipo' value='{{$tipo}}' type = 'hidden'>
                <input type='submit' value='{{$tipo}}'>
            </form>
        </div>

        <div class="col-mr-1">
            <form method="post" action="{{route('atualiza_pontuacao')}}">
                @csrf
                @php
                $tipo = 'reduz';
                @endphp
                <input name='tipo' value='{{$tipo}}' type = 'hidden'>
                <input type='submit' value='{{$tipo}}'>
            </form>
        </div>
    </div>        
</div>
@endsection
