<!DOCTYPE html>

<html lang="en">



<head>

	<title>Seus dados</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--===============================================================================================-->



	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap"

		rel="stylesheet">



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="doacao/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="doacao/fonts/iconic/css/material-design-iconic-font.min.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="css/util.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!--===============================================================================================-->



	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">

	<link rel="stylesheet" href="css/animate.css">



	<link rel="stylesheet" href="css/owl.carousel.min.css">

	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/magnific-popup.css">



	<link rel="stylesheet" href="css/aos.css">



	<link rel="stylesheet" href="css/ionicons.min.css">



	<link rel="stylesheet" href="css/flaticon.css">

	<link rel="stylesheet" href="css/icomoon.css">







</head>





<body>

	



<?php 



	session_start();



	

	

	// verifica se o login NÃO foi feito

	if (!isset($_SESSION['login']) && $_SESSION['login'] != true) {

		// redireciona para:

		header('Location: ../');

	}







	try{



		include("conexao.php");



		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM usuarios WHERE id_user = :id_user";



		$result = $conn->prepare($sql);



		$result->bindValue(":id_user", $_SESSION['sess_id_user']);



		$result->execute();



		if($result->rowCount() >= 1){

            // armazena os valores que foram selecionados 

			$dados = $result->fetch(PDO::FETCH_ASSOC);



		}

	}catch(PDOException $erro){

		

		echo "Erro ao puxar dados!!!";

	}



?>







	<div class="limiter">

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<form class="login100-form validate-form" action = "alteradados.php">

					<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"

						id="ftco-navbar">

						<div class="container-fluid px-md-5">

							<table>

								<tr>

									<td> <a class="navbar-brand" href="index.html">Cãopaixão <br><span>Aqui cãosigo um

												amigo</span></a>

						</div>



						</td>

						</tr>

						</table>









						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"

							aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">

							<span class="oi oi-menu"></span> Menu

						</button>



						<div class="collapse navbar-collapse" id="ftco-nav">

							<ul class="navbar-nav ml-auto">

								<li class="nav-item active"><a href="index.php" class="nav-link">Seus Dados</a>

								</li>

							



							</ul>

						</div>

			</div>

			</nav>

			<!-- END nav -->



			<Br>





			<br>

			<div class="d-flex  justify-content-center">

				

				<img src="images/user.png" class="circle" style="width: 170px; height: 170px;">

				

				

			</div>



			<form id="altUser" method = "POST">



            <div class="wrap-input100 validate-input m,br-b-23" data-validate="Nome de usuário necessário">

				<span class="label-input100">ID</span><br>

                <input class="input100" type="text" name="id_user" value="<?=$dados['id_user']?>" readonly> 

			</div>





			<div class="wrap-input100 validate-input m-b-32" data-validate="Nome de usuário necessário">

				<br>

				<span class="label-input100">Nome</span><br>

                <input class="input100" type="text" name="nome" value="<?=$dados['nome']?>">

			</div>

			



			<div class="wrap-input100 validate-input m-b-23" data-validate="Nome de usuário necessário">

				<span class="label-input100">Email</span><br>

				<input class="input100" type="text" name="email" value="<?=$dados['email']?>">

			</div>



			<div class="wrap-input100 validate-input m-b-23" data-validate="Nome de usuário necessário">

				<span class="label-input100">Telefone</span><br>

				<input class="input100" type="text" name="telefone" value="<?=$dados['telefone']?>"></p>

			</div>





			<div class="wrap-input100 validate-input m-b-23" data-validate = "Cidade">

							<span class="label-input100">Cidade</span>

							<select class="input100" name="cidade" id="categoria" value ="<?=$dados['cidade']?>" id = "cidade">

								<option>Nenhuma selecionada</option>

								<option>São José do Rio Pardo</option>

								<option>Mococa</option>

								<option>Divinolândia</option>

								<option>Tapiratiba</option>

								<option>Caconde</option>

							</select>

							<span class="focus-input100" data-symbol="&#xf206;"></span>

						</div>



                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Data de nascimento">

							<span class="label-input100">Data de Nascimento</span>

							<input id="date" type="date" class="input100"  name="nascimento" value="<?=$dados['nascimento']?>">

							<span class="focus-input100" data-symbol="&#xf206;"></span>

						</div>



                        <div class="container-login100-form-btn">

							<div class="wrap-login100-form-btn">

								<div class="login100-form-bgbtn"></div>

								<button class="login100-form-btn">

									<a href="javascript:void(0)" class="login100-form-btn" name = "btnlaterar"> Alterar Dados </a>

								</button>

							</div>

				</form>

			</div>

		</div>

	</div>

	</div>

	</div>

	</div>









	<script src="js/jquery.min.js"></script>

	<script src="js/jquery-migrate-3.0.1.min.js"></script>

	<script src="js/popper.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.easing.1.3.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.stellar.min.js"></script>

	<script src="js/owl.carousel.min.js"></script>

	<script src="js/jquery.magnific-popup.min.js"></script>

	<script src="js/aos.js"></script>

	<script src="js/jquery.animateNumber.min.js"></script>

	<script src="js/scrollax.min.js"></script>

	<script

		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

	<script src="js/google-map.js"></script>

	<script src="js/main.js"></script>



	<div id="dropDownSelect1"></div>



	<!--===============================================================================================-->

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<!--===============================================================================================-->

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<!--===============================================================================================-->

	<script src="vendor/bootstrap/js/popper.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!--===============================================================================================-->

	<script src="vendor/select2/select2.min.js"></script>

	<!--===============================================================================================-->

	<script src="vendor/daterangepicker/moment.min.js"></script>

	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<!--===============================================================================================-->

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<!--===============================================================================================-->

	<script src="js/main.js"></script>


	<script>
		$('#altUser').on('submit', function(e){
			e.preventdefault();

			let dados = $(this).serialize();

			//ajax
			$.ajax({
				type: "POST",
				url: "editUser.php?id_user="<?=$_SESSION['sess_id_user']?>,
				dataType: 'json',
				data: dados,
				beforeSend: function (response) {
					console.log("Aguarde...");
				},
				success: function (response) {

					if (response.codigo == 1) {

						console.log('Sucesso')

					} else if (response.codigo == 2) {

						console.log('Erro');

					}

				},
				error: function (error) {
					console.log(error.responseText);
				}

			});
		})
	</script>

</body>



</html>