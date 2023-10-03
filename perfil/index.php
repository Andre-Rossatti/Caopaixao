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

<?php
	if(!isset($_SESSION)){
		session_start();
	}



    require_once "conexao.php";

    include "restrito.php";



    try{
        if(ISSET($_SESSION['sess_id_user'])){
        $id_user = $_SESSION['sess_id_user'];
                
        $consulta = $conn->prepare("SELECT * FROM usuarios WHERE id_user = :id_user;");
        $consulta->bindValue(':id_user',$id_user);
        $consulta->execute();


        $row = $consulta->fetch(PDO::FETCH_ASSOC);
            
            }
            
        }catch (PDOException $erro) {
                echo $erro->getMessage();
            }



	
?>
    

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<form class="login100-form validate-form" id="editUser<?=$row['id_user']?>" method="POST" entype="multipart/form-data">
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
								<li class="nav-item"><a href="doacao/index.php" class="nav-link">Doe seu pet</a></li>
								<li class="nav-item"><a href="seuspets/index.php" class="nav-link">Seus pets</a></li>
								<li class="nav-item"><a href="./sair.php" class="nav-link">Sair</a></li>

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

<?php

require_once "conexao.php";


        
    ?>


<p><?php "Sessão:".session_id();?>


			<form action = "index.php" method = "POST">
			

			<div class="wrap-input100 validate-input m-b-32" data-validate="Nome de usuário necessário">
				<br>
				<span class="label-input100">Nome</span><br>
				<input type="text" name="nome" value="<?php if(isset($row['nome'])){ echo $row['nome'];} ?>">	
			</div>
			

			<div class="wrap-input100 validate-input m-b-23" data-validate="Nome de usuário necessário">
				<span class="label-input100">Email</span><br>
				<input type="text" name="email" value="<?php if(isset($row['email'])){ echo $row['email'];} ?>">	
			</div>

			<div class="wrap-input100 validate-input m-b-23" data-validate="Nome de usuário necessário">
				<span class="label-input100">Telefone</span><br>
				<input type="text" name="telefone" value="<?php if(isset($row['telefone'])){ echo $row['telefone'];} ?>" requires>	
			</div>

			<div class="wrap-input100 validate-input m-b-23" data-validate = "Cidade">
							<span class="label-input100">Cidade</span>
							<select class="input100" name="cidade" id="categoria" value="<?php if(isset($row['cidade'])){ echo $row['cidade'];} ?>" required>
								<option>Nenhuma selecionada</option>
								<option>São José do Rio Pardo</option>
								<option>Mococa</option>
								<option>Divinolândia</option>
								<option>Tapiratiba</option>
								<option>Caconde</option>
							</select>
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>
			<div class="wrap-input100 validate-input m-b-23" data-validate="Data de nascimento">
				<span class="label-input100">Data de Nascimento</span><br>
				<input id = "date" type="text" name="nascimento" value="<?php if(isset($row['nascimento'])){ echo $row['nascimento'];} ?>" required>	
			</div>

			<div class="container-login100-form-btn d-flex" style="width: 250px; height: 40px; color: white;">
				<div class="wrap-login100-form-btn">
					<input type = "submit" name = "btnalterar" class="login100-form-bgbtn" value = "Alterar dados" style="cursor: pointer; color: white"></a>
				</div>
				</form>
			</div>
		</div>
	</div>
	</form>
	</div>
	</div>
	</div>


	<?php
	if(isset($_REQUEST["btnalterar"])) {	
		try{
			// abrir a conexao com BD
				require "conexao.php";

                $id_user = $_REQUEST["id_user"];
				$nome = $_REQUEST["nome"];
				$email = $_REQUEST["email"];
				$telefone = $_REQUEST["telefone"];
				$cidade = $_REQUEST["cidade"];
				$nascimento = $_REQUEST["nascimento"];

				
                     // Código para inserir as informações no BD.	
                $sql = $conn -> prepare("UPDATE usuarios SET nome= :nome, email= :email, cidade= :cidade, telefone= :telefone,
                nascimento= :nascimento WHERE id_user= :id_user");

				

                $sql->bindValue(':id_user',$id_user);
                $sql->bindValue(':nome',$nome);
				$sql->bindValue(':email',$email);
				$sql->bindValue(':cidade',$cidade);
				$sql->bindValue(':telefone',$telefone);
				$sql->bindValue(':nascimento',$nascimento);
           
                $sql->execute();				
				
				echo "<script language=javascript>
				alert('Cadastro Alterado com Sucesso');
				location.href = 'index.php?alt=$id_user';
				</script>";						
		
			    // fechar a conexao com BD
			    $conn = null;
                    
		    }
            catch (PDOException $erro) {
			echo $erro->getMessage();}
        }
        ?>



	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Minha Conta</h2>
						<ul class="list-unstyled">
							<li><a href="../#adote" class="py-1 d-block"><span
										class="ion-ios-arrow-forward mr-3"></span>Adote</a></li>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
								<h2>Redes Sociais</h2>
								<li class="ftco-animate"><a
										href="https://api.whatsapp.com/send?phone=5519983396078&text=Ola%20Andr%C3%A9%2C%20tenho%20uma%20duvida%20sobre%20o%20site"><span
											class="icon-whatsapp"></span></a></li>
								<li class="ftco-animate"><a href="https://www.facebook.com/andre.rossatti.1/"><span
											class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="https://www.instagram.com/andre_rossatti/"><span
											class="icon-instagram"></span></a></li>
							</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Quem somos</h2>
						<ul class="list-unstyled">
							<li><a href="../#minhaTag" class="py-1 d-block"><span
										class="ion-ios-arrow-forward mr-3"></span>Sobre Nós</a></li>
							<li><a href="../index.php" class="py-1 d-block"><span
										class="ion-ios-arrow-forward mr-3"></span>Inicio</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Alguma Duvida ?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><a href="tel:#"><span class="icon icon-phone"></span><span class="text">(19)
											983396078</span></a></li>
								<li><a href="mailto:andrelrossatti@gmail.com.br"><span
											class="icon icon-envelope"></span><span
											class="text">andrelrossatti@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
</div>

					</p>
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


	

</body>

</html>