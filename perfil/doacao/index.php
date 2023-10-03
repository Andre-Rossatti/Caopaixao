<!DOCTYPE html>
<html lang="en">

<head>
	<title>Doação</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->


</head>


<?php

require "restrito.php";

?>


<body>


<?php

if(!isset($_SESSION)){
	session_start();
}

	?>
	

	<div id="cadastro" class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form id="formCadUser" class="login100-form validate-form" action = "cadDoacao.php" method="POST" enctype="multipart/form-data">
					<a href="..\index.php"><img src= "images/seta.png" style = "height: 40px;width: 40px; text-align: left;"></a>
					<span class="login100-form-title p-b-20">
						<a><img width="100px" height="70px" src='images/logo.bmp'></a>
					</span>

					<STYLE>A {text-decoration: none;} </STYLE>
					<span class="login100-form-title p-b-10">
						<a class="navbar-brand" href="index.html">Cão Paixão <br><span>Aqui caosigo um amigo</span></a>
					</span>
					<span class="login100-form-title p-b-49">
						Cadastro de Doação
					</span>


					<span class="label-input100">Espécie do pet:</span>
					<p>
						<input type="radio" name="especie" value="gato" required> Gato
						<input type="radio" name="especie" value="cao"> Cão
					</p>
					<br>
					<p>

						<span class="label-input100">Sexo do pet:</span> <br>
						<input type="radio" name="Sexo" value="macho" required> Macho
						<input type="radio" name="Sexo" value="femea"> Femêa

					</p>


					<br>

					<p>

						<span class="label-input100">Porte do pet:</span>
						<select class="form-control" id="porte" name="porte">
							<option label="Grande" value="grande"></option>
							<option label="Médio" value="medio"></option>
							<option label="Pequeno" value="pequeno" selected="selected"></option>
						</select>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</p>

					<br>
					<p>
						<span class="label-input100">Cor do pet:</span>
						<select class="form-control" id="cor" name="cor">
							<option label="Amarelo" value="Amarelo" selected="selected">Amarelo</option>
							<option label="Cinza" value="Cinza">Cinza</option>
							<option label="Vermelho" value="Vermelho">Vermelho</option>
							<option label="Branco" value="Branco">Branco</option>
							<option label="Marrom" value="Marrom">Marrom</option>
							<option label="Preto" value="Preto">Preto</option>
							<option label="Misto" value="Misto">Misto</option>
						</select>
					</p>
					<br>
					<p>
						<span class="label-input100">Idade do pet:  </span>
						<select class="form-control" id="idade" name="idade">
							<option label="1 ano" value="1" selected="selected"></option>
							<option label="2 anos" value="2"></option>
							<option label="3 anos" value="3"></option>
							<option label="4 anos" value="4"></option>
							<option label="5 anos" value="5"></option>
							<option label="6 anos" value="6"></option>
							<option label="7 anos" value="7"></option>
							<option label="8 anos" value="8"></option>
							<option label="9 anos" value="9"></option>
							<option label="10 ano" value="10"></option>
							<option label="11 anos" value="11"></option>
							<option label="12 anos" value="12"></option>
						</select>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</p>
					<p>
						<br>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Nome completo">
						<span class="label-input100">Nome do pet:</span>
						<input class="input100" type="text" name="nome" placeholder="Digite o nome">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					</p>
					<br>


					<div class="wrap-input100 validate-input m-b-23" data-validate="Raça do animal">
						<span class="label-input100">Raça do pet:</span>
						<input class="input100" type="text" name="raca" placeholder="Digite a raça">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<p>
					<div class="wrap-input100 validate-input m-b-23" data-validate="comentario">
						<span class="label-input100">Comentário sobre o pet:</span>
						<input class="input100" type="textared" name="comentarios" placeholder="Digite seu comentário">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					</p>


					<div class="wrap-input100 validate-input m-b-23" data-validate="fotos">
						<span class="label-input100">Inserir fotos do pet:</span>
						<br>
						<p>
						<input type="file" class="form-control" id="arquivo" name="arquivo" aria-describedby="arquivo" placeholder="Imagem">
					</div>
					</p>



					<!-- Doar-->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
							<input type="submit" name="BtnCadastrar" id="Cadastrar" Value = "">Cadastrar

						</div>

						


					</div>
				</form>
			</div>
		</div>
	</div>

	


</body>

</html>