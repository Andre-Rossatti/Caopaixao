<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../images/7063logonav.ico" sizes="125x125">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../../images/7063logonav.ico" sizes="120x120" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
</head>

<body>

<?php






if(isset($_SESSION)){
	header ("location: ../perfil/");
}


?>



	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form id="login" class="login100-form validate-form">
                 <a href="../index.php"><img src= "../perfil/doacao/images/seta.png" style = "height: 40px;width: 40px; text-align: left;"></a>
					<span class="login100-form-title p-b-49">
						Login
					</span>
					<div class="alert"></div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Email necessário">
						<span class="label-input100">Usuário</span>
						<input class="input100" type="text" name="email" placeholder="Digite seu email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Senha requerida">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Digite sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

				<br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								<span class="login100-form-btn"> Login </span>
							</button>
						</div>

						<img height="300px" src="images/logo.jpg">

						

						<a href="Cadastro.php" class="txt2">
							Inscrever-se
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


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
		$('#login').submit(function(e) {
			e.preventDefault();

			let dados = $(this).serialize();

			//ajax
			$.ajax({
				type: "POST",
				url: "login.php",
				dataType: 'json',
				data: dados,
				beforeSend: function(response) {
					//console.log("Aguarde...");
				},
				success: function(response) {

					if (response.codigo == 1) {

						//console.log(response.mensagen);
						//alerta o usuario
						$('.alert').addClass('alert-success'); // <div class="alert"/>
						$('.alert').text(response.mensagem);
						$('.alert').removeClass('d-none');
						setTimeout(function() {
							$(".alert").addClass('d-none');
							// link para ser reedirecionado se o login for efetuado com sucesso
							window.location= response.redirect;
						}, 2000);

					} else if (response.codigo == 2) {

						//console.log(response.mensagem);
						//alerta o usuario
						$('.alert').addClass('alert-danger');
						$('.alert').text(response.mensagem);
						$('.alert').removeClass('d-none');
						setTimeout(function() {
							$(".alert").addClass('d-none');
						}, 2000);

					}

				},
				error: function(error) {
					console.log(error.responseText);
				}

			});
		});
	</script>

</body>

</html>