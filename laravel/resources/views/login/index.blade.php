@extends('layout')

@section('conteudo')
<div class="container-fluid" style="background-color: #DAA429">
    <div class="row">

        <div class="col-3"></div>

        <div class="col-6 d-flex justify-content-center border rounded" style="background-color: #B8860B; border-color: gold">
            <form name="login" method="post"><br>
                @csrf
                <div class="form-group">
                    <h1 class="h3 mb-3 font-weight-normal" style="color: black; font-family: monospace;">Login</h1>
                    <input class="form-control" type="text" name="usuario" placeholder="Usuário" required value=<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>>
                </div>
                <div class="form-group">
                    <input style="border-color: 
                    <?php if (isset($_SESSION['senha_correta'])) if (!$_SESSION['senha_correta']) echo "red" ?> " class="form-control" type="password" name="senha" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <a href="#" data-toggle="tooltip" title="Em Construção" style="color: black">Redefinir senha</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Entrar</button>						
                </div>						
            </form>
        </div>

        <div class="col-3"></div>
    
    </div>
</div>

</div>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection