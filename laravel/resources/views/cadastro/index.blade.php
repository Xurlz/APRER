@extends('layoutII')

@section('conteudo')
<div class="container-fluid" style="background-color: #DAA429">
    
    <div class="row">

        <div class="col-3"></div>

        <div class="col-6 d-flex justify-content-center border rounded" style="background-color: #B8860B; border-color: gold; padding-bottom: 20px">
            <form name="signup" method="post" onsubmit="get_action(this)"><br>
                @csrf
                <h1 class="h3 mb-3 font-weight-normal" style="color: black; font-family: monospace;">Cadastro</h1>	
                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="E-mail" maxlength="30" required>
                </div>			
                <div class="form-group">
                    <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha"	maxlength="40" required>
                </div>					
                <div class="form-group">
                    <input class="form-control" type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Repita a Senha" required>
                </div>	
                <style>
                    .custom-control-input:checked ~ .custom-control-label::before {
                        color: #fff;
                        border-color: #8B4513;
                        background-color: #8B4513;
                    }
                </style>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="cliente" name="usuario_tipo" class="custom-control-input" value="cliente" checked>
                    <label class="custom-control-label" for="cliente">Cliente</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="profissional" name="usuario_tipo" class="custom-control-input" value="profissional">
                    <label class="custom-control-label" for="profissional">Profissional</label>
                </div>			
                                    
                
                <br><button type="submit" class="btn btn-warning" style="margin-top: 10px">Cadastrar</button>
            </form>		
        </div>

        <div class="col-3"></div>
        
    </div>
</div>
<!-- <script src="../js/checkpassword.js"></script>		 -->

<script type="text/javascript">
    function get_action(form) {
        if (document.getElementById("cliente").checked) {
            form.action = "cadastro/cliente";
        }
        else
            form.action = "cadastro/profissional"; 
    }
</script>
@endsection