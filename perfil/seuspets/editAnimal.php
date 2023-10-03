<?php

session_start();

if (!empty($_FILES["arquivo"]["name"])) 
{

    //CODIGO UPLOAD

    // definindo timezone - data e hora

    date_default_timezone_set('America/Sao_Paulo');

    $data = date("d-m-Y");

    $time = date("H-i-s");



    //função random

    $num = rand(1, 10000000000);



    //verifica o arquivo

    $nomeimg = $_FILES["arquivo"]["name"];

    $temp = $_FILES["arquivo"]["tmp_name"];

    $tamanho = $_FILES["arquivo"]["size"];

    $type = $_FILES["arquivo"]["type"];

    $erro = $_FILES["arquivo"]["error"];



    //verifica a extensão do arquivo

    $ext = pathinfo($nomeimg, PATHINFO_EXTENSION);



    if (($ext != 'jpg') and ($ext != 'png')) 

    {

        $retorno = array('codigo' => 2, 'mensagem' => 'São apenas permitidas as extensões : JPG e PNG');

        echo json_encode($retorno);

         exit();

    }



    if($tamanho > 900000)

    {

        $retorno = array('codigo' => 2, 'mensagem' => 'Sua imagem é maior que 9mb!');

        echo json_encode($retorno);

        exit();

    }



    //renomear nome da imagem

    $novo_nome = 'imagem'.''.$data.''.$time.'_'.$num.'.'.$ext;



    //comando para mover o arquivo para a pasta

    $mover = move_uploaded_file($temp, '../imgAnimal/'.$novo_nome);



    // Criando caminho do arquivo

    $arquivo = 'imgAnimal/'.$novo_nome;



} else {
    $arquivo = $_REQUEST['img_atual'];
}

    //recebe o id do animal
    $id_animal = $_REQUEST['id_animal'];

    // RECEBE DADOS DO ANIMAL
    $nome = $_REQUEST['nome'];

    $raca = $_REQUEST['raca'];

    $cor = $_REQUEST['cor'];

    $idade = $_REQUEST['idade'];

    try{

        include("conexao.php");

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE animais SET nome_animal = :nome_animal, raca = :raca, cor = :cor, idade = :idade, arquivo = :arquivo WHERE id_animal =:id_animal";

        $result = $conn->prepare($sql);

        $result->bindValue(':nome_animal', $nome);

        $result->bindValue(':raca', $raca);

        $result->bindValue(':cor', $cor);

        $result->bindValue(':idade', $idade);

        $result->bindValue(':id_animal', $id_animal);

        $result->bindValue(':arquivo', $arquivo);

        $result->execute();

        if($result->rowCount()>=1){


            $retorno = array('codigo' => 1, 'mensagem' => 'Dados alterados!');

            echo json_encode($retorno);

            exit(); 

        } else {

            $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao alterar dados!');

            echo json_encode($retorno);

            exit();
        }

    }catch(PDOException $erro){

        $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao alterar dados!'.$erro);

        echo json_encode($retorno);

        exit();

    }

?>



