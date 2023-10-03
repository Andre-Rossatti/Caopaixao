<?php

	SESSION_START();

	require "../restrito.php";

    //limpa dados atk xss
    function limpaString($dados)
    {

        $dados = addslashes($dados);
        $dados = strip_tags($dados);
        $dados = htmlspecialchars($dados);

        return $dados;
    }

    //var dump
    //var_dump($_REQUEST);

    $id_user  = isset($_REQUEST['id_user']) ? limpaString($_REQUEST['id_user']) : '';
    $situacao = isset($_REQUEST['situacao']) ? limpaString($_REQUEST['situacao']) : '';


    switch ($situacao) {
        case 'administrador':
            $situacao = 0;
            break;

        case 'padrao':
            $situacao = 1;
            break;
            
        default:
            $retorno = array('codigo' => 2, 'mensagem' => 'Selecione um tipo de usuário!');
            echo json_encode($retorno);
            break;
    }


    try{
        //importa o arquivo de conexão
        include "conexao.php";

        //abre a conexão

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL

        $sql = "UPDATE usuarios SET situacao = :situacao WHERE id_user = :id_user";
        
        //passar os parametros (valores vindo do form ou variavel para a variavel $sql)

        $result = $conn->prepare($sql);
        $result->bindValue(':situacao', $situacao);
        $result->bindValue(':id_user', $id_user);


        //executar a variavel para inserir os dados no banco de dados mysql

        $result->execute();

        //msg para o usuario saber que os dados foram inseridos com sucesso
        $retorno = array('codigo' => 1, 'mensagem' => 'Dados alterados com Sucesso!');
        echo json_encode($retorno);
        //exit();
        header('Location:./index.php');


    }
    //exibindo erros ao cadastrar
    catch(PDOException $erro)
    {
        $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao alterar os dados!');
        echo json_encode($retorno);
        //exit();
        header('Location:./');
        //echo "Falha ao cadastrar dados: ".$erro->getMessage();
    }

    $conn = null;
?>