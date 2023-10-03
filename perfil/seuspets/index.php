<?php 

	session_start();
	// verifica se o login NÃO foi feito

	function getAnimal(){

		try{

			include("conexao.php");
	
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM animais WHERE id_user = :id_user";
	
			$result = $conn->prepare($sql);
	
			$result->bindValue(":id_user", $_SESSION['sess_id_user']);
	
			$result->execute();
	
			if($result->rowCount() >= 1){
				// armazena os valores que foram selecionados 
				return $result;
	
			}
		}catch(PDOException $erro){
			
			echo "Erro ao puxar dados!!!";
		}

	}

	$getAnimal = getAnimal();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Seus pets</title>
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


	<div id="cadastro" class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
					<a href="../index.php"><img src="images/seta.png"
							style="height: 40px;width: 40px; text-align: left;"></a>
					<span class="login100-form-title p-b-20">
						<img width="100px" height="70px" src='images/logo.bmp' style="text-align: center;">
					</span>
					<span class="login100-form-title p-b-10">
						<a class="navbar-brand" href="index.php">Cão Paixão <br><span>Aqui caosigo um amigo</span></a>
					</span>
					<span class="login100-form-title p-b-49" style="text-align: center;">
						Seus cadastros:
					</span>

					
					<?php
						while ($row = $getAnimal->fetch(PDO::FETCH_ASSOC)){
						
					?>
					<form class="login100-form validate-form" id="altAnimal<?=$row['id_animal']?>" method="POST" entype="multipart/form-data">
						<div class="card">
							<div class="card-header">
								<a class="collapsed card-link" data-toggle="collapse" href="#animal<?=$row['id_animal']?>">
									Dados do animal <?=$row['nome_animal']?> cadastrado(clique aqui)
								</a>
							</div>
							<div id="animal<?=$row['id_animal']?>" class="collapse" data-parent="#accordion">
								<div class="card-body">
									<img src="../<?=$row['arquivo']?>" class="img-fluid rounded" width='200px' height='200px' alt="<?=$row['nome_animal']?>">
                                    <br>
									<div class="d-flex  justify-content-center">
                                    <br>
                  <input type="hidden" name="img_atual" value="<?=$row['arquivo']?>"/>
									<input type="file" class="form-control" id="arquivo" name="arquivo"  style = "margin-top: 30px;" aria-describedby="arquivo" placeholder="Imagem">
                                    <br>
									</div>
                                    <br>
									<div class="wrap-input100 validate-input m-b-23" data-validate="nome completo">
										<span class="label-input100">Nome do animal:</span>
										<input class="input100" type="text" name="nome" value=" <?=$row['nome_animal']?>" >
										<span class="focus-input100" data-symbol="&#xf206;"></span>
									</div>

									<div class="wrap-input100 validate-input m-b-23" data-validate="raca">
										<span class="label-input100">Raça:</span>
										<input class="input100" type="text" name="raca" value=" <?=$row['raca']?>">
										<span class="focus-input100" data-symbol="&#xf206;"></span>
									</div>

									<div class="wrap-input100 validate-input m-b-23" data-validate="cor">
										<span class="label-input100">Cor:</span>
										<input class="input100" type="text" name="cor" value=" <?=$row['cor']?>">
										<span class="focus-input100" data-symbol="&#xf206;"></span>
									</div>

									<div class="wrap-input100 validate-input m-b-23" data-validate="idade">
										<span class="label-input100">Idade:</span>
										<input class="input100" type="text" name="idade" value=" <?=$row['idade']?>">
										<span class="focus-input100" data-symbol="&#xf206;"></span>
									</div>

									<div class="alert alert<?=$row['id_animal']?>"></div>

									<div class="d-flex justify-content-between">
										<div class="container-login100-form-btn d-flex" style="width: 50px; height: 50px;">
											<div class="wrap-login100-form-btn">
												<div class="login100-form-bgbtn"></div>
												<button class="login100-form-btn">
													<a href="javascrit:void(0)" id="<?=$row['id_animal']?>" class="login100-form-btn delAnimal"><img src="images/delete.png" class="float-left"  style="width: 50px; height: 50px;"> </a>
												</button>
											</div>
										</div>
										
										<div class="container-login100-form-btn d-flex" style="width: 250px; height: 40px;">
											<div class="wrap-login100-form-btn">
												<div class="login100-form-bgbtn"></div>
												<button class="login100-form-btn">
													<a href="javascript:void(0)" id="<?=$row['id_animal']?>" class="login100-form-btn altAnimal"> Alterar Dados </a>
												</button>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
						<br>
					</form>
					<?php
					}
					?>
					


			</div>
		</div>
	</div>
	</div>
				</div>
			</div>
		</div>
	</footer>




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
        $('.altAnimal').on('click', function(e){

						e.preventDefault();
						e.stopPropagation();

					 	let idAnimal = this.id;

            let dados = new FormData(document.getElementById("altAnimal"+idAnimal))

            $.ajax({
							type: "POST",
							url: "editAnimal.php?id_animal=" + idAnimal,
							dataType: 'json',
							data: dados,
							processData: false,
							contentType: false,
							beforeSend: function (response) {
								console.log("Aguarde...");
							},
							success: function (response) {

								if (response.codigo == 1) {

									$('.alert'+idAnimal).text(response.mensagem);

									$('.alert'+idAnimal).removeClass('alert-danger');

									$('.alert'+idAnimal).addClass('alert-success'); // <div class="alert"></div>

									$('.alert'+idAnimal).removeClass('d-none');

									setTimeout(function () {

										$(".alert"+idAnimal).addClass('d-none');

									}, 2000);

								} else if (response.codigo == 2) {

									$('.alert'+idAnimal).removeClass('alert-success');

									$('.alert'+idAnimal).addClass('alert-danger');

									$('.alert'+idAnimal).text(response.mensagem);

									$('.alert'+idAnimal).removeClass('d-none');

									setTimeout(function () {

										$(".alert"+idAnimal).addClass('d-none');

									}, 2000);

								}

							},
							error: function (error) {
								console.log(error.responseText);
							}

						}); 
        });

				$('.delAnimal').on('click', function (e) {

					e.preventDefault();
					e.stopPropagation();

					let idAnimal = this.id;

					$.ajax({
						type: "POST",
						url: "deletaAnimal.php?id_animal="+idAnimal,
						dataType: 'json',
						processData: false,
						contentType: false,
						beforeSend: function (response) {
							console.log("Aguarde...");
						},
						success: function (response) {

							if (response.codigo == 1) {

								$('.alert' + idAnimal).text(response.mensagem);

								$('.alert' + idAnimal).removeClass('alert-danger');

								$('.alert' + idAnimal).addClass('alert-success'); // <div class="alert"></div>

								$('.alert' + idAnimal).removeClass('d-none');

								setTimeout(function () {

									$(".alert" + idAnimal).addClass('d-none');

								}, 2000);

							} else if (response.codigo == 2) {

								$('.alert' + idAnimal).removeClass('alert-success');

								$('.alert' + idAnimal).addClass('alert-danger');

								$('.alert' + idAnimal).text(response.mensagem);

								$('.alert' + idAnimal).removeClass('d-none');

								setTimeout(function () {

									$(".alert" + idAnimal).addClass('d-none');

								}, 2000);

							}

						},
						error: function (error) {
							console.log(error.responseText);
						}

					});
				});
    </script>
</body>

</html>