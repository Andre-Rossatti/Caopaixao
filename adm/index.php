<!DOCTYPE html>

<html>

  <head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
<a href = "../" class="btn float-left"> <i class="fa fa-user" aria-hidden="true"> </i> <img  width="25" height="25" src='Voltar.png'></a>
    Usuarios Cadastrados

    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
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

  <p><?php  "Sessão:".session_id();?>


  <div class="container">

  <div class="col-sm-12;" >
  <a href = "../login/Cadastro.php" class="float-right mt-3 p-3"> <i class="fa fa-plus" aria-hidden="true"> </i> <img  width="30" height="30" src='mais.png'></a>
    </div>

    <div class="container text-light">

    <div class="row text-light table-responsive" >

      <div class="col-sm-12 text-light">
      	<!--Tabela de usuarios-->
        <table class="table table-bordered mt-3 text-light">
          <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Cidade </th>
            <th> Telefone </th>
            <th> Data nascimento </th>
            <th> Tipo </th>
			<td colspan="2" align="center"> DETALHES </td>
          </tr>
	<?php
		try{

	        //importa o arquivo de conexão
	        include "conexao.php";

	        //abre a conexão

	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL

	        $sql = "SELECT * FROM usuarios";

	        $consulta = $conn->prepare($sql);

	        $consulta->execute();

	        // Armazena os dados na variavel Row
	        while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) 
	        {
	?>
	          <tr>
	            <td> <?php echo $row['id_user']?> </td>
	            <td> <?php echo $row['nome']?> </td>
	            <td> <?php echo $row['email']?> </td>
              <td> <?php echo $row['cidade']?> </td>
	            <td> <?php echo $row['telefone']?> </td>
	            <td> <?php echo $row['nascimento']?> </td>
	            <td> 
	            	<?php echo ($row['situacao'] == 1) ? "Usuario" : null; ?>
	            	<?php echo ($row['situacao'] == 0) ? "Administrador" : null; ?> 
	            </td>
	      
	            <td>
                    <a onclick="confirmacao('alterar.php?id_user=<?php echo $row['id_user']?>')"><i class="fa fa-refresh"><img  width="50" height="50" src='alterar.png'></i></a>
                </td>
                <td>
                    <a onclick="confirmacao('index.php?ex=<?php echo $row['id_user']?>')"><i style="color: red" class="fa fa-trash"></i> <img  width="25" height="25" src='errado.png'> </a>
                </td>
	          </tr>

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
		  window.location.href= link;
		}
	}
</script>

</body>

</html>

<?php

	if(isset($_REQUEST['ex']))
    {
        try{

        	$id_user = $_REQUEST['ex'];

            //importa o arquivo de conexão
            include "conexao.php";

            //abre a conexão
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL
            $sql = "DELETE FROM usuarios WHERE id_user = :id_user";

            //prepara a variavel sql de exclusao
            $delete = $conn->prepare($sql);

            //passa os valores passados na variavel ex
            $delete->bindValue(':id_user', $id_user);
                
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

                    setTimeout(function(){ location.href = './' }, 3000);
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

                    setTimeout(function(){ location.href = './' }, 3000);
                </script>";
        }
            
    }

?>