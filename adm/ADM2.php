
<!DOCTYPE html>

<html>

  <head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width">

  <title>Area ADM</title>

  <!--Styles-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

  <!--Script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</head>

<?php
	SESSION_START();

	require "../restrito.php";

?>

<body class = "bg-dark text-light">

<div class="hero-wrap js-fullheight text-center p-3 text-light bg-primary" style="background-color:darkgrey">
<a href = "./index.php" class="btn float-left "> <i class="fa fa-user" aria-hidden="true"> </i> <img  width="25" height="25" src='Voltar.png'></a>
    Animais para aprovação

  

    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu "></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link text-light">Usuarios Cadastrados</a></li>
			  <li class="nav-item"><a href="ADM2.php" class="nav-link text-light">Animais Cadastrados</a></li>
               <li class="nav-item"><a href="../perfil/index.php" class="nav-link text-light">Seus Dados</a></li>
	          <li class="nav-item"><a href="../perfil/sair.php" class="nav-link text-light">Sair</a></li>
	        </ul>
	      </div>
  </div>

    <br>

    <p><?php "Sessão:".session_id();?>

  <div class="container text-light">

    <div class="row text-light table-responsive">

      <div class="col-sm-12 text-light">
      	<!--Tabela de usuarios-->
        <table class="table table-bordered mt-3 text-light">
          <tr>
            <th> ID Animal </th>
            <th> Foto Animal </th>
            <th> Nome Animal </th>
            <th> Cor </th>
            <th> Raça </th>
            <th> Idade </th>
            <th> Especie </th>
            <th> Porte </th>
            <th> Sexo  </th>
            <th> Comentarios </th>
            <th> Situacao </th>

			<td colspan="2" align="center"> Aprovação </td>
          </tr>
	<?php


		try{

	        //importa o arquivo de conexão
	        include "conexao.php";

	        //abre a conexão

	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL

	        $sql = "SELECT * FROM animais";

	        $consulta = $conn->prepare($sql);

	        $consulta->execute();

	        // Armazena os dados na variavel Row
	        while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) 
	        {

            //tabela
	?>
	          <tr>
	            <td> <?php echo $row['id_animal'] ?> </td>
              <td><img class="img-fluid img-thumbnail" src="../perfil/<?=$row['arquivo']?>"></td>
          
	            <td> <?php echo $row['nome_animal']?> </td>
                <td> <?php echo $row['cor']?> </td>
                <td> <?php echo $row['raca']?> </td>
                <td> <?php echo $row['idade']?> </td>
                <td> <?php echo $row['especie']?> </td>
	            <td> <?php echo $row['porte']?> </td>
	            <td> <?php echo $row['sexo']?> </td>
                <td> <?php echo $row['comentarios']?> </td>
               
	            <td> 
	            	<?php echo ($row['situacao'] == 0) ? "Aprovar" : null; ?>
	            	<?php echo ($row['situacao'] == 1) ? "Aprovado" : null; ?> 
	            </td>
	          
	            <td>
                    <a <?php if($row['situacao'] == 0){  ?>href="alteraranimal.php?id=<?php echo $row['id_animal'];?>&situacao=1"<?php }elseif($row['situacao'] == 1){ ?> onclick='alert("Animal já aprovado")' <?php } ?>><i class="fa fa-refresh"></i><img  width="30" height="30" src='certo.png'></a>
                </td>
                <td>
                  <a href="alteraranimal.php?id=<?php echo $row['id_animal'];?>&situacao=2"><i style="color: red" class="fa fa-trash"></i> <img  width="25" height="25" src='errado.png'> </a>
                </td>
	          </tr>

 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="js/bootstrap-notify.min.js"></script>

	<?php



            }

        }
        catch(PDOException $erro)
        {
            echo "Falha ao exibir os dados: ".$erro->getMessage();
        }

    ?>
          
        </table>

      </div>

    </div>

  </div>


  <!-- JS -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="js/bootstrap-notify.min.js"></script>

 <script>
	function confirmacao(link)
	{
		var link = link;

		var r=confirm("Você tem certeza?");

		if (r==true)
		{
		  window.location.href= index.php;
		}
	}
</script>

</body>

</html>

<?php

	if(isset($_REQUEST['ex']))
    {
        try{

        	$idusuario = $_REQUEST['ex'];

            //importa o arquivo de conexão
            include "conexao.php";

            //abre a conexão
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL
            $sql = "DELETE FROM animais WHERE id_usuarios = :id_animais";

            //prepara a variavel sql de exclusao
            $delete = $conn->prepare($sql);

            //passa os valores passados na variavel ex
            $delete->bindValue(':id_usuarios', $idusuario);
                
            //executa o comando de exclusao
            $delete->execute();

            //informa o usuario que os dados foram excluidos
            echo "
                <script language=javascript>
	                var notify = $.notify('<strong></strong>', {
	                type: 'success',
	                allow_dismiss: true,
	                showProgressbar: false
	            	});

                	notify.update('type', 'success');
                    notify.update('message', '<strong>Sucesso!</strong> usuário excluido com sucesso');

                    setTimeout(function(){ location.href = 'index.php' }, 3000);
                </script>";

        }
        catch(PDOException $erro)
        {
            //echo "Falha ao exibir os dados: ".$erro->getMessage();
            echo "
                <script language=javascript>
	                var notify = $.notify('<strong></strong>', {
	                type: 'success',
	                allow_dismiss: true,
	                showProgressbar: false
	            	});

                	notify.update('type', 'danger');
                    notify.update('message', '<strong>Erro!</strong> Erro ao excluir usuário');

                    setTimeout(function(){ location.href = 'index.php' }, 3000);
                </script>";
        }
            
    }

?>
