@extends('layouts.app')
@section('content')
<div class="container">
    <form method='post'>
        @csrf
        <div class="mb-3">
            <label class="form-label">Profissional</label>
            <input type="number" class="form-control" name = "profissional_id">
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