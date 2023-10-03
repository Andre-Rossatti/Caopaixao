<?php
    
    // limpa dados, evitando ataques xss
    function limpaString($dados)
    {
    $dados = addslashes($dados);
    $dados = strip_tags($dados);
    $dados = htmlspecialchars($dados);

    return $dados;
    }

    // recebe os dados do formulario para
    $email = isset($_REQUEST['email']) ? limpaString($_REQUEST['email']) : '';
    $senha = isset($_REQUEST['senha']) ? limpaString($_REQUEST['senha']) : '';

    if (empty($email) || empty($senha)) {
        $retorno = array('codigo' => 2, 'mensagem' => 'Preencha todos os campos!');
        echo json_encode($retorno);
        exit();
    }

    // começa o login
    try {

        //importa arquivo de conexão
        include_once('conexao.php');

        //abre conexao
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query de busca sql
        $sql = "SELECT * FROM usuarios WHERE email = :email";

        //prepara conexao
        $result = $conn->prepare($sql);

        //passa valores para a qquery
        $result->bindValue(':email', $email);

        //executa a busca
        $result->execute();

        //verifica se foi encontrado algum registro
        if ($result->rowCount() >= 1) {
            //atribui valores da busca para a variavel dados
            $dados = $result->fetch(PDO::FETCH_ASSOC);

            //senha criptografada no bd
            $hash = $dados['senha'];

            //verifica se o hash não está vazio
            if ($hash !== null) {

                //verifica se as senhas são iguais
                if (!password_verify($senha, $hash)) {

                    $retorno = array('codigo' => 2, 'mensagem' => 'Email/senha incorretos!');
                    echo json_encode($retorno);
                    exit();

                } else {
                    
                    include "conexao.php";


                    SESSION_START();

                    $_SESSION['sess_situacao_user'] = $dados['situacao'];

                    if($dados['situacao'] == 1){
                         $redirect = '../perfil/index.php';
                    }elseif($dados['situacao'] == 0){
                         $redirect = '../adm/index.php';
                    }else {
                         $redirect = 'index.php';
                        exit(); // -> sai da sessão pq se o usuario nn tiver um nivel tem algo de errado 
                    }

                    //sessao de login passa a ser true
                    $_SESSION['login'] = true;

                    //sessao de com o id do usuario
                    $_SESSION['sess_id_user'] = $dados['id_user'];
                    //sessao de com o nome do usuario
                    $_SESSION['sess_name_user'] = $dados['nome'];
                    //sessao de com o nome do usuario
                    $_SESSION['sess_email_user'] = $dados['email'];

                    $_SESSION['sess_telefone_user'] = $dados['telefone'];

                    $_SESSION['sess_senha_user'] = $dados['senha'];

                    $_SESSION['sess_cidade_user'] = $dados['cidade'];

                    $_SESSION['sess_nascimento_user'] = $dados['nascimento'];

                      //retorna que os dados estão sendo validados
                    $retorno = array('codigo' => 1, 'mensagem' => 'Validando dados...', 'redirect' => $redirect);
                    echo json_encode($retorno);

                }
                
                //if ($row ['sess_situacao'] == "1"){
				//	header ("location: ADM/.php");
		//	}

			//if ($row ['situacao'] == "0"){
			//	header ("location: inicio_usuario.php");
//}



            } else {
                $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao efetuar o Login!');
                echo json_encode($retorno);
                exit();
            }
        } else {
            $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao efetuar o Login!');
            echo json_encode($retorno);
            exit();
        }


        
    } catch (PDOException $erro) {
    $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao efetuar o Login!');
    echo json_encode($retorno);
    exit();
    }
    $conn = null;
