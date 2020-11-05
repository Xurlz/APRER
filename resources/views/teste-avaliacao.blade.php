@extends('layouts.app')
@section('content')
<div class="container">
    <form>
        <div class="mb-3">
            <label class="form-label">Profissional</label>
            <select class="form-control">
                <option selected> Selecione um Profissional</option>
                <option value="1"> Profissional a</option>
                <option value="2"> Profissional b</option>
                <option value="3"> Profissional c</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nota</label>
            <input type="number" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Avaliação</label>
            <input type="text" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-danger">Enviar</button>
    </form>
</div>
@endsection