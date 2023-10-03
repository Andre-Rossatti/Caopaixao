<?php

	SESSION_START();

	require "../restrito.php";


  $id= $_GET['id'];
  $situacao = $_REQUEST['situacao'];

  switch ($situacao) {
    case 1:
        ConfirmaCadastroAnimal($id, $situacao);
        break;
    case 2:
        ConfirmaCadastroAnimal($id, 0);
        break;
  }

  function ConfirmaCadastroAnimal($id, $situacao){

    try {
     //importa arquivo de conexão
      include_once('conexao.php');

      //abre conexao
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Query de busca sql
      if($situacao == 1){
       $sql = "UPDATE animais SET situacao = '1' WHERE id_animal = :id_animal";
      } else {
        $sql = "DELETE FROM animais WHERE id_animal = :id_animal";
      }

      //prepara conexao
      $result = $conn->prepare($sql);

      //passa valores para a qquery
      $result->bindValue(':id_animal', $id);

      //executa a busca
      $result->execute();

      if($result->rowCount() > 0){

        if($situacao == 1){
          $retorno = array('codigo' => 2, 'mensagem' => 'Animal aprovado!');
        } else {
          $retorno = array('codigo' => 2, 'mensagem' => 'Animal Reprovado!');
        }
        echo json_encode($retorno);
        //exit();
        header('Location:ADM2.php');

      }else{
        $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao alterar animal!');
        echo json_encode($retorno);
        exit();
      }
    } catch (PDOException $erro) {
      $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao alterar animal!');
      echo json_encode($retorno);
      //exit();
    }

  }


?>