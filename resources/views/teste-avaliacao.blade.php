@extends('layouts.app')
@section('content')
<div class="container">
    <form method='post'>
        @csrf
        <div class="mb-3">
            <label class="form-label">Profissional</label>
            <select class="form-control" name="profissional">
                <option value="" selected> Selecione um Profissional</option>
                <option value="1"> Profissional a</option>
                <option value="2"> Profissional b</option>
                <option value="3"> Profissional c</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nota</label>
            <input type="number" class="form-control" name = "nota">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Avaliação</label>
            <input type="text" class="form-control" name = "avaliacao">
        </div>
    
        <button type="submit" class="btn btn-danger">Enviar</button>
    </form>
</div>
@endsection