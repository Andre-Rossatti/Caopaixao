<?php
	SESSION_START();

	require "../restrito.php";

?>

<?php 

  //processo para recuperar os dados e exibir no formulario
  try{
    //importa o arquivo de conexão
    include "conexao.php";

    //verifica se a variavel AL que veio do form de edição esta vazia, caso contrario continua a executar o codigo
    if(isset($_REQUEST['id_user']))
    {

      //recupera o valor da variavel al e atribui da variavel de id
      $id_user = $_REQUEST['id_user'];
                
      //abre a conexão
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL

      $sql = "SELECT * FROM usuarios WHERE id_user = :id_user";

      //passar os parametros (valores vindo do form ou variavel para a variavel $sql)

      $result = $conn->prepare($sql);
      $result->bindValue(':id_user', $id_user);

      

      //executar a variavel para inserir os dados no banco de dados mysql

      $result->execute();

      //armazenar os valores da consulta na variavem row
      $row = $result->fetch(PDO::FETCH_ASSOC);

     }

    }
    //exibindo erros ao cadastrar
    catch(PDOException $erro)
    {
      echo "Falha ao retornar dados: ".$erro->getMessage();
    }
  
    $conn = null;
  ?>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Alterando Usuário | <?php echo $row['nome']?></title>
  
      <!-- Main css -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container">
        <div class="row justify-content-center mt-5">
            <form id="formAltUser" method="POST" enctype="multipart/form-data" action="alterardados1.php">
                <div class="form-group">
                  <label for="id_user">ID User</label>
                  <input type="text" class="form-control" id="id_user" name="id_user" aria-describedby="emailHelp" value="<?php echo $row['id_user']?>" readonly>
                </div>
                
                  <div class="col">
                    <label for="exampleInputPassword1">Tipo</label>
                      <select name="situacao" class="form-control" id="situacao">
                            <!--Verificação de valor do tipo de usuário-->
                            <?php 
                              switch ($row['situacao']) {
                                case 1:
                                  echo '<option value="administrador" selected>Administrador</option>';
                                  echo '<option value="padrao">Padrão</option>';
                                  break;
  
                                case 0:
                                  echo '<option value="padrao" selected>Padrão</option>';
                                  echo '<option value="administrador">Administrador</option>';
                                  break;
                              } 
                            ?>
                      </select>
                  </div>
                </div>
                  <input type="submit" name="BtnCadastrar" class="btn btn-secondary mt-5 float-right" id="Cadastrar" value="Alterar"/>
                  <button class="btn btn-secondary mt-5 mr-2 float-right"><a href="./" style="text-decoration: none; color: white">Cancelar</a></button>
              </form>
          </div>
      </div>  
  
 <!-- JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap-notify.min.js"></script>
</body>
</html>