<?php
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

    $nome  = isset($_REQUEST['nome']) ? limpaString($_REQUEST['nome']) : '';
    $email = isset($_REQUEST['email']) ? limpaString($_REQUEST['email']) : '';
    $senha = isset($_REQUEST['senha']) ? limpaString($_REQUEST['senha']) : '';
    
    $telefone = isset($_REQUEST['telefone']) ? limpaString($_REQUEST['telefone']) : '';
    $cidade = isset($_REQUEST['cidade']) ? limpaString($_REQUEST['cidade']) : '';
    $nascimento = isset($_REQUEST['nascimento']) ? limpaString($_REQUEST['nascimento']) : '';
    $Termodeuso = isset($_REQUEST['Termodeuso']) ? limpaString($_REQUEST['Termodeuso']) : '';

    if($Termodeuso !== 'sim'){
        $retorno = array('codigo' => 2, 'mensagem' => 'Aceite os termos de uso!');
        echo json_encode($retorno);
        exit();
    }
    //verifica os dados
    if (empty($nome)) 
    {
        $retorno = array('codigo' => 2, 'mensagem' => 'Preencha o campo Nome!');
        echo json_encode($retorno);
        exit();
    }
    if (empty($email)) 
    {
        $retorno = array('codigo' => 2, 'mensagem' => 'Preencha o campo Email!');
        echo json_encode($retorno);
        exit();
    }
    if (empty($senha)) 
    {
        $retorno = array('codigo' => 2, 'mensagem' => 'Preencha o campo senha!');
        echo json_encode($retorno);
        exit();
    }

    if (empty($telefone)) 
    {
        $retorno = array('codigo' => 2, 'mensagem' => 'Preencha o campo de telefone!');
        echo json_encode($retorno);
        exit();
    }
    if (empty($cidade)) 
    {
        $retorno = array('codigo' => 2, 'mensagem' => 'Preencha o campo cidade!');
        echo json_encode($retorno);
        exit();
    }
    if (empty($nascimento)) 
    {
        $retorno = array('codigo' => 2, 'mensagem' => 'Preencha o campo data de nascimento!');
        echo json_encode($retorno);
        exit();
    }

    $datacadastro = date("Y-m-d");
				//Codigo upload
				date_default_timezone_set('America/Sao_Paulo');
				$data = date("d-m-Y");
				$time = date("H-i-s");

    //criptografar a senha
    $pass = password_hash($senha, PASSWORD_DEFAULT);

    $situacao = "1";

    $_SESSION["id_user"];
		

    try{
        //importa o arquivo de conexão
        include "conexao.php";

        //abre a conexão

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL

        $sql = "INSERT INTO usuarios VALUES (:id_user, :nome, :senha, :email, :cidade, :telefone, :nascimento, :situacao, :datacadastro) ";

        //passar os parametros (valores vindo do form ou variavel para a variavel $sql)

        $result = $conn->prepare($sql);
        $result->bindValue(':id_user', null);
        $result->bindValue(':nome', $nome);
        $result->bindValue(':senha', $pass);
        $result->bindValue(':email', $email);
        $result->bindValue(':cidade', $cidade);
        $result->bindValue(':telefone', $telefone);
        $result->bindValue(':nascimento', $nascimento);
        $result->bindValue(':situacao', $situacao);
        $result->bindValue(':datacadastro', $datacadastro);

        //executar a variavel para inserir os dados no banco de dados mysql

        $result->execute();

        if($result->rowCount() >= 1){
            //msg para o usuario saber que os dados foram inseridos com sucesso
            $retorno = array('codigo' => 1, 'mensagem' => 'Dados cadastrados com Sucesso!');
            echo json_encode($retorno);
            exit();

        } else {
            $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao cadastrar os dados!');
            echo json_encode($retorno);
            exit();
        }

    }
    //exibindo erros ao cadastrar
    catch(PDOException $erro)
    {
        $retorno = array('codigo' => 2, 'mensagem' => $erro->getMessage());
        echo json_encode($retorno);
        exit();
        //echo "Falha ao cadastrar dados: ".$erro->getMessage();
    }

    $conn = null;
