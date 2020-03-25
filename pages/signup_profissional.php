<?php
	session_start();

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>APRER</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css" type="text/css"> 
</head>
<body>	
	<div class="container-fluid" style="background-color: #DAA429">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="../index.php"><img src="../img/APRERLOGO.png" width="150"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Sair</a>
				</li>
				</ul>
			</div>  
		</nav><br>
		
		<div class="row">
				
			<div class="col-3"></div>

			<div class="col-6 d-flex justify-content-center border rounded" style="background-color: #B8860B; border-color: gold; padding-bottom: 20px">
				<form name="signup" method="post" action="insert_profissional.php"><br>
					<h1 align="center">CADASTRO DE PROFISSIONAL</h1>					
						<div class="form-group">
							<input class="form-control" type="text" id="email_profissional" name="email_profissional" placeholder="Usuário" maxlength="30" required value=<?php 
								$user = "";
								if (isset($_POST["email"])){		
									$user = test_input($_POST["email"]);	
									$cookie_nome = "email";
									$cookie_valor = $user;
									setcookie($cookie_nome,$cookie_valor, time() + (60*3), "/");		
									$_SESSION["email"] = $user;
									echo $user;
								}
							?>
							>
						</div>
						<!-- NOME_CLIENTE -->
						<div class="form-group">
							<input class="form-control" type="text" id="nome_profissional" name="nome_profissional" placeholder="Nome" maxlength="50"	required>
						</div>	
						<!-- CPF -->
						<div class="form-group">
							<input class="form-control" type="text" id="cpf_profissional" name="cpf_profissional" placeholder="CPF" maxlength="15" required>
						</div>	
						<!-- CEP -->
						<div class="form-group">
							<input  class="form-control" type="text" id="cep_profissional" name="cep_profissional" placeholder="CEP" size="9" maxlength="9" onblur="pesquisacep(this.value)" required>
						</div>
						<!-- RUA -->
						<div class="form-group">
							 <input class="form-control" type="text" id="rua_profissional" name="rua_profissional" placeholder="Rua" maxlength="30" required>
						</div>
						<!-- NUMERO -->
						<div class="form-group">
							 <input class="form-control" type="text" id="numero_profissional" name="numero_profissional" placeholder="Número" maxlength="6" required>
						</div>
						<!-- COMPLEMENTO -->
						<div class="form-group">
							 <input class="form-control" type="text" id="complemento_profissional" name="complemento_profissional" maxlength="20" placeholder="Complemento">
						</div>
						<!-- BAIRRO -->
						<div class="form-group">
							 <input class="form-control" type="text" id="bairro_profissional" name="bairro_profissional" placeholder="Bairro" maxlength="30" required>
						</div>
						<!-- CIDADE -->
						<div class="form-group">
							 <input class="form-control" type="text" id="cidade_profissional" name="cidade_profissional" placeholder="Cidade" maxlength="30" required>
						</div>
						<!-- UF -->
						<div class="form-group">
							 <input class="form-control" type="text" id="uf_profissional" name="uf_profissional" placeholder="UF" maxlength="2" required>
						</div>	
						<!-- TELEFONE -->
						<div class="form-group">
							<input class="form-control" type="text" id="tel_profissional" name="tel_profissional" placeholder="Telefone" maxlength="15"	required>
						</div>							

						<div class="form-group">
						  <label>Região de Atendimento</label>
						  <select class="form-control" id="regiao_atendimento" name="regiao_atendimento" required>
						    <option>Norte</option>
						    <option>Sul</option>
						    <option>Leste</option>
						    <option>Oeste</option>
						    <option>Centro</option>
						  </select>
						</div>

						<div class="form-group">
						  <label>Ramo</label>
						  <select class="form-control" id="ramo_profissional" name="ramo_profissional" required>
						    <option>Eletrica</option>
						    <option>Hidraulica</option>
						    <option>Pintura</option>
						    <option>Alvenaria</option>
						    <option>Reparo</option>
						    <option>Instalacao</option>
						  </select>
						</div>
						<!-- SENHA -->
						<div>
							<input type="hidden" id="senha_profissional" name="senha_profissional" value=<?php if($_POST["senha"]) echo $_POST["senha"]?>>
						</div>
						<!-- LATITUDE -->
						<div>
							<input type="hidden" id="lat_profissional" name="lat_profissional" value="">
						</div>
						<!-- LONGITUDE -->
						<div>
							<input type="hidden" id="lng_profissional" name="lng_profissional" value="">
						</div>
						<div>
							<button type="submit" class="btn btn-warning" style="margin-top: 10px">Concluir</button>
						</div>
						
							
				</form>		
			</div>

			<div class="col-3"></div>
			
		</div>
	</div>	

	    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua_profissional').value=("");      
            document.getElementById('bairro_profissional').value=("");
            document.getElementById('cidade_profissional').value=("");
            document.getElementById('uf_profissional').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua_profissional').value=(conteudo.logradouro);
            document.getElementById('bairro_profissional').value=(conteudo.bairro);
            document.getElementById('cidade_profissional').value=(conteudo.localidade);
            document.getElementById('uf_profissional').value=(conteudo.uf);
            
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
                document.getElementById('rua_profissional').value="...";
                document.getElementById('bairro_profissional').value="...";
                document.getElementById('cidade_profissional').value="...";
                document.getElementById('uf_profissional').value="...";

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

    navigator.geolocation.getCurrentPosition(function(position) {
	    let lat = position.coords.latitude;
	    let lng = position.coords.longitude;

	    document.getElementById('lat_profissional').value = lat;
	    document.getElementById('lng_profissional').value = lng;
	  });
	        
    </script>
</body>
</html>