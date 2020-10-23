@extends('layoutII')

@section('conteudo')
<div class="container-fluid" style="background-color: #DAA429">
    <div class="row">
			
        <div class="col-3"></div>

			<div class="col-6 d-flex justify-content-center border rounded" style="background-color: #B8860B; border-color: gold; padding-bottom: 20px">
                <form name="signup" method="post" action="cliente/criar"><br>
                    @csrf
					<h1 align="center">CADASTRO DE CLIENTE</h1>
					<!-- USUÁRIO (EMAIL) -->
					<div class="form-group">
						<input class="form-control" type="hidden" id="email_cliente" name="email_cliente" placeholder="E-mail" maxlength="30" required value=<?php 
                            echo isset($_POST['email'])?$_POST['email']:"";
                            // $user = "";
							// if (isset($_POST["email"])){		
							// 	$user = test_input($_POST["email"]);	
							// 	$cookie_nome = "email";
							// 	$cookie_valor = $user;
							// 	setcookie($cookie_nome,$cookie_valor, time() + (60*3), "/");		
							// 	$_SESSION["email"] = $user;
							// 	echo $user;
							// }
						?>
						>
					</div>
					<!-- NOME_CLIENTE -->
					<div class="form-group">
						<input class="form-control" type="text" id="nome_cliente" name="nome_cliente" placeholder="Nome" maxlength="50" required>
					</div>	
					<!-- CPF -->
					<div class="form-group">
						<input class="form-control" type="text" id="cpf_cliente" name="cpf_cliente" placeholder="CPF" maxlength="15" required>
					</div>	
					<!-- CEP -->
					<div class="form-group">
						<input  class="form-control" type="text" id="cep_cliente" name="cep_cliente" placeholder="CEP" size="9" maxlength="9" onblur="pesquisacep(this.value)" required>
					</div>
					<!-- RUA -->
					<div class="form-group">
						 <input class="form-control" type="text" id="rua_cliente" name="rua_cliente" placeholder="Rua" maxlength="30" required>
					</div>
					<!-- NUMERO -->
					<div class="form-group">
						 <input class="form-control" type="text" id="numero_cliente" name="numero_cliente" placeholder="Número" maxlength="6"required>
					</div>
					<!-- COMPLEMENTO -->
					<div class="form-group">
						 <input class="form-control" type="text" id="complemento_cliente" name="complemento_cliente" maxlength="20" placeholder="Complemento">
					</div>
					<!-- BAIRRO -->
					<div class="form-group">
						 <input class="form-control" type="text" id="bairro_cliente" name="bairro_cliente" maxlength="30" placeholder="Bairro" required>
					</div>
					<!-- CIDADE -->
					<div class="form-group">
						 <input class="form-control" type="text" id="cidade_cliente" name="cidade_cliente" maxlength="30" placeholder="Cidade" required>
					</div>
					<!-- UF -->
					<div class="form-group">
						 <input class="form-control" type="text" id="uf_cliente" name="uf_cliente" placeholder="UF" maxlength="2" required>
					</div>
					<!-- TELEFONE -->
					<div class="form-group">
						<input class="form-control" type="text" id="tel_cliente" name="tel_cliente" placeholder="Telefone" maxlength="15" required>
					</div>	
					<!-- SENHA -->
					<div>
						<input type="hidden" id="senha_cliente" name="senha_cliente" maxlength="40" value=<?php if($_POST["senha"]) echo $_POST["senha"]?>>
					</div>
					<button type="submit" class="btn btn-warning" style="margin-top: 10px">Concluir</button>
				</form>		
			</div>

			<div class="col-3"></div>
			
		</div>
    </div>
</div>
<script type="text/javascript" >
    
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua_cliente').value=("");      
        document.getElementById('bairro_cliente').value=("");
        document.getElementById('cidade_cliente').value=("");
        document.getElementById('uf_cliente').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua_cliente').value=(conteudo.logradouro);
            document.getElementById('bairro_cliente').value=(conteudo.bairro);
            document.getElementById('cidade_cliente').value=(conteudo.localidade);
            document.getElementById('uf_cliente').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua_cliente').value="...";
                document.getElementById('bairro_cliente').value="...";
                document.getElementById('cidade_cliente').value="...";
                document.getElementById('uf_cliente').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
</script>
@endsection