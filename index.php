<?php
	include "adm/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
	
  <head>
	  
    <title>Cãopaixão</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="images/7063logonav.ico" sizes="125x125">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    

	
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-5">
			<table>
				<tr>
				  <td> <a class="navbar-brand" href="index.php">Cão Paixao <span>Aqui caosigo um amigo</span></a></div>
					<td><a href = "index.html"><img  width="90" height="90" src='images/logonav.png'></td></a>
			  </td> 
				</tr>
			   
			  </table>
	      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#minhaTag" class="nav-link">Quem somos</a></li>
			  <li class="nav-item"><a href="login/Cadastro.php" class="nav-link">Cadastro</a></li>
			  <li class="nav-item"><a href="vermais/pagvermais.php" class="nav-link">Adote</a></li>
	          <li class="nav-item"><a href="login/index.php" class="nav-link">Doação</a></li>
	          <li class="nav-item"><a href="perfil/index.php" class="nav-link">Perfil</a></li>
			  <button style="border: none; background: none; color: #6ed0f0
			  ;" onclick="myFunction()"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
				<path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
			  </svg>
			</button>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/fundo.webp');">
      <div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Encontre Seu <BR> Novo amigo</h1>
            <p><a href="vermais/pagvermais.php" class="btn-custom mr-md-4">Adote <span class="ion-ios-arrow-forward"></span></a> <a href="login/index.php" class="btn-custom">Doe <span class="ion-ios-arrow-forward"></span></a></p>
		
				<BR>
			  <h5 class="mb-2">Nosso site visa ajudar os animais e seus donos.<BR> Os bichinhos de estimação também sentem falta de amor e carinho, sendo em lares que são indesejáveis ou em abandono em ruas.<BR> </h5>
				<h6 class="subheading">Apoie essa causa :D</h6>

				<span class="glyphicon glyphicon-arrow-down"></span>
				
		</div>
        </div>
      </div>
    </div>
	
<br>
    
<section id="adote"></section>



		<!--adoção-->
	<section class="ftco-section ftco-no-pt">
			
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 text-center heading-section ftco-animate">
						  <h2 class="mb-4">Adoção</h2>
                          <span class="subheading">Animas Para Adoção</span>
					</div>
				</div>

				<div class="row">
				<?php 
					$consulta_animais=$conn-> prepare("SELECT * FROM animais LIMIT 9");
					$consulta_animais->execute();

					while($row=$consulta_animais->fetch(PDO::FETCH_ASSOC)){

					
				?>
				<div class="col-md-4 ftco-animate">		
                <a href="animal/animal.php?id=<?php echo $row["id_animal"]; ?>">			
					<div class="case img d-flex align-items-top justify-content-center" id="" style="background-image:url('perfil/<?php echo $row["arquivo"]; ?>');">
						<div class="text text-center">
							<h3 style = "padding: 10px; background-color: #9829e0; color: #6ed0f0;"><?php echo $row["nome_animal"] ?> </h3>
						</div>
					</div>
				</div>
				<?php 
					}
				?>			
						
		</div>



				<div class="row justify-content-center mb-5" style="text-align: center; justify-content: center; display: block; margin: auto ;">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
								<a href="vermais/pagvermais.php" class="login100-form-btn" style="font-family: Poppins, Arial, sans-serif "> Ver Mais </a>
							</button>
						</div>
					</div>
				</div>

				


			</div>
		</div>



    </section>


	<a id="button"></a>


<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
		

		
<div class = "mural">
    <section class="ftco-section">
    <div class="container">
    	<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section ftco-animate">
            <h2 class="mb-4">Adotados</h2>
            <span class="subheading">Ja adotados</span>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="case img d-flex align-items-top justify-content-center" style="background-image: url(images/adotados-1.jpg);">
        			<div class="text text-center">
        				<h3 style = "padding: 10px; background-color: #6ed0f0; color:#9829e0;">Peludinho</h3>
        				<span style="color: #6ed0f0;width: 150px; height: 130px; background-color: #9829e0;">Marcia da Silva</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="case img d-flex align-items-top justify-content-center" style="background-image: url(images/adotados-2.jpg);">
        			<div class="text text-center">
        				<h3 style = "padding: 10px; background-color: #6ed0f0; color:#9829e0;">Fiel</h3>
        				<span  style="color: #6ed0f0;width: 150px; height: 130px; background-color: #9829e0;">Daniel Costa</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="case img d-flex align-items-top justify-content-center" style="background-image: url(images/adotados-3.jpg);">
        			<div class="text text-center">
        				<h3 style = "padding: 10px; background-color: #6ed0f0; color:#9829e0;">Laika</h3>
        				<span style="color: #6ed0f0;width: 150px; height: 130px; background-color: #9829e0;">Jorge Abreu</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="case img d-flex align-items-top justify-content-center" style="background-image: url(images/adotados-4.jpg);">
        			<div class="text text-center">
        				<h3 style = "padding: 10px; background-color: #6ed0f0; color:#9829e0;">Jorge</h3>
        				<span style="color: #6ed0f0;width: 150px; height: 130px; background-color: #9829e0;">Diogo Oliveira</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="case img d-flex align-items-top justify-content-center" style="background-image: url(images/adotados-5.jpg);">
        			<div class="text text-center">
        				<h3 style = "padding: 10px; background-color: #6ed0f0; color:#9829e0;">Doutor</h3>
        				<span style="color: #6ed0f0;width: 150px; height: 130px; background-color: #9829e0;">Carlos Neto</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="case img d-flex align-items-top justify-content-center" style="background-image: url(images/adotados-6.jpg);">
        			<div class="text text-center">
        				<h3 style = "padding: 10px; background-color: #6ed0f0; color:#9829e0;">Pamonha</h3>
        				<span style="color: #6ed0f0;width: 150px; height: 130px; background-color: #9829e0;">Julia Andrade</span>
        			</div>
        		</div>
        	</div>
        </div>
	</div>
    </section>
</div>
    <section class="ftco-section testimony-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Opiniões</h2>
            <span class="subheading">Opiniões dos adotadores</span>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4"  style="color: #6ed0f0;">Adorei a minha experiencia com o site, desde o começo achei bem simples e facil de se navegar, hoje graças ao cãopaixão tenho o Rex...</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/pessoa1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name" style="color: #9829e0;">Caio de Souza</p>
		                    <span class="position">Ja adotou no site</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
					<p class="mb-4"  style="color: #6ed0f0;">Fiquei extremamente apaixonado pelo site e pela ideia, hoje encontro um animal na rua e ja corro para cadastrar ele aqui.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/pessoa2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name" style="color: #9829e0;">João Flavio</p>
		                    <span class="position ">Ja adotou no site</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4"  style="color: #6ed0f0;">Adorei a velocidade e facilidade para fazer a minha doação, nao podia cuidar de mais cachorros, mas graças ao site eles hoje tem um dono.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/pessoa3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name" style="color: #9829e0;">Carla Silva</p>
		                    <span class="position">Doou no site</span>
		                  </div>
	                  </div>
                  </div>
                </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<br>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Nossos Objetivos</h2>
            <span class="dog">Metas</span>
          </div>
        </div>
	<div class = "icones">
		<div class="mb-5 text-warning">
			<div class="info-section">
			  <div class="container">
				<div class="row">
				  ﻿<div class="col-md-4">
					  <div class="feature-box feature-box-simple text-center"><i class="fa fa-paw" style="font-size:70px;color: #9829e0"  fill="currentColor" class="bi bi-telephone w-100" viewBox="0 0 16 16"></i>
					  </svg></span>  
						<div class="feature-box-content">
						  <br>
						  <h3 style="color: #9829e0;">Encontre agora<span> seu amigo</span></h3>
						  <p style="color: #6ed0f0;">Não há recompensa maior do que vê-los se transformarem naquela coisinha alegre e saudável depois de receberem uma boa dose de cuidado e carinho!</p>
						</div>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="feature-box feature-box-simple text-center"><i class="fa fa-github-alt" style="font-size:70px;color: #9829e0" fill="currentColor" class="bi bi-telephone w-100" viewBox="0 0 16 16"></i>
						  </svg>
					  </svg></i>
						<div class="feature-box-content">
						  <br>
						  <h3 style="color: #9829e0;">Não abandone <span>os novos amigos</span></h3>
						  <p style="color: #6ed0f0;">Jamais abandone os filhotes do seu antigo amigo, se não for possivel mante-lo com voce, no nosso site sera possivel encontrar um dono para ele! </p>
						</div>
					  </div>
					</div>
					<div class="col-md-4">
						<div class="feature-box feature-box-simple text-center"><i class="fa fa-home" style="font-size:70px;color: #9829e0" fill="currentColor" class="bi bi-telephone w-100" viewBox="0 0 16 16"></i>
					  </svg></i>
						<div class="feature-box-content">
						  <br>
						  <h3 style="color: #9829e0;">Ajude um animal <span>a encontrar um lar</span></h3>
						  <section id="minhaTag"></section>
						  <p style="color: #6ed0f0;">Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados.Tudo o que precisam é de um lar para serem felizes de verdade!</p>  
						</div>
					  </div>
					</div>    </div>
			  </div>
			</div>
	</div>
  
    
	

	<br>

	
	<section class="ftco-section testimony-section ftco-no-pt">
		<div class="container">
		  <div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
			  <section class="ftco-section testimony-section ftco-no-pt">
				  
				<h2 class="mb-4">Quem somos</h2>
          	<span class="subheading">A partir de uma proposta de TCC, do terceiro ETIM de Informática para Internet, da Escola Etec de São José do Rio Pardo, criamos esse site para ajudar os animais e donos. Os bichos de estimação também sentem a falta de carinho e negligências sendo em lar que não os querem mais ou em um abandono nas ruas. Por meio de um motivo como este resolvemos criar o site para ajudar os donos a terem opção na hora que não puderem cuidar do seu animalzinho, para que assim eles não parem nas ruas ou maltratados.
				Somos um Grupo de cinco participantes, com idade média de dezessete anos e formação no curso de três anos de programação para internet. Com base no nosso conhecimento criamos uma plataforma fácil e prática para que todos possam acessar e participar. Somos nós! cheios de esperanças para um mundo melhor. Contamos com você!</span>   
				<img src="images/logo.png" style="width: 300px;">
        </div>
			</div>
		  </div>
		</div>
	
	</div>
  </div>
</div>
</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
<div class="container">
<div class="row mb-5">
  <div class="col-md">
	<div class="ftco-footer-widget mb-4">
	  <h2 class="ftco-heading-2">Minha Conta</h2>
	  <ul class="list-unstyled">
	  <li><a href="vermais/pagvermais.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Adote</a></li>
	  <li><a href="login/index.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Login</a></li>
	  <li><a href="login/Cadastro.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Cadatro</a></li>
	  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
		  <h2>Redes Sociais</h2>
		<li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=5519983396078&text=Ola%20Andr%C3%A9%2C%20tenho%20uma%20duvida%20sobre%20o%20site"><span class="icon-whatsapp"></span></a></li>
		<li class="ftco-animate"><a href="https://www.facebook.com/andre.rossatti.1/"><span class="icon-facebook"></span></a></li>
		<li class="ftco-animate"><a href="https://www.instagram.com/andre_rossatti/"><span class="icon-instagram"></span></a></li>
	  </ul>
	</div>
  </div>
  <div class="col-md">
	<div class="ftco-footer-widget mb-4 ml-md-5">
		<h2 class="ftco-heading-2">Quem somos</h2>
		<ul class="list-unstyled">
		<li><a href="#minhaTag"  class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Sobre Nós</a></li>
		<li><a href="index.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Inicio</a></li>
	  </ul>
	</div>
  </div>
  <div class="col-md">
	<div class="ftco-footer-widget mb-4">
		<h2 class="ftco-heading-2">Alguma Duvida ?</h2>
		<div class="block-23 mb-3">
		  <ul>
			<li><a href="tel:#"><span class="icon icon-phone"></span><span class="text">(19) 9 8339-6078</span></a></li>
			<li><a href="mailto:andrelrossatti@gmail.com.br"><span class="icon icon-envelope"></span><span class="text">tcccaopaixao@gmail.com</span></a></li>
		  </ul>
		</div>
	</div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-paw" style="font-size:70px;color: #6ed0f0"  fill="currentColor" class="bi bi-telephone w-100" viewBox="0 0 16 16"></i></button>

	<script>

function myFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

		</script>

	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"></svg><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#6ed0f0"/></svg></div>


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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>