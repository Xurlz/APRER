@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Feedback</h3>
            <form>
                <div class="mb-3">
                    <label class="form-label">Avaliação</label>
                    <textarea class="form-control" name = "texto"></textarea>
                </div>
                
                <div class="row justify-content-end mb-3 mx-4">
                    <input 
                        type="number"
                        min="0"
                        max="5"
                        class="form-control"
                        style="width: 4rem"
                        name = "nota"
                    >
                </div>
                
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-warning">Registrar Feedback</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection