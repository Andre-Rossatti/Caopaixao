<?php

    if(!isset($_SESSION)){
        session_start();
    }

    //recebe o id do usuario
    $id_user = $_REQUEST['id_user'];

    // RECEBE DADOS DO USUARIOS
    $nascimento = $_REQUEST['nascimento'];
    $cidade = $_REQUEST['cidade'];
    $telefone = $_REQUEST['telefone'];
    $email = $_REQUEST['email'];
    $nome = $_REQUEST['nome'];


    try{

        include("conexao.php");

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE usuarios SET :nascimento = nascimento, cidade = :cidade, telefone = :telefone, email = :email, nome = :nome WHERE id_user =:id_user";

        $result = $conn->prepare($sql);

        $result->bindValue(':nascimento', $nascimento);

        $result->bindValue(':cidade', $cidade);

        $result->bindValue(':telefone', $telefone);

        $result->bindValue(':email', $email);

        $result->bindValue(':nome', $nome);

        $result->bindValue(':id_user', $id_user);

        $result->execute();

        if($result->rowCount()>=1){

            $retorno = array('codigo' => 1, 'mensagem' => 'Dados alterados!');
            echo json_encode($retorno);
            exit(); 
        }
    }catch(PDOException $erro){
        $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao alterar dados!');
        echo json_encode($retorno);
        exit();
    }
?>