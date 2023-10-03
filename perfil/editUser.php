<?php



    require_once "conexao.php";


    try{

        $id_user = $_REQUEST['id_user'];

        // abrir a conexao com BD

        require "conexao.php";

        

        $id_user = $_REQUEST["id_user"];

        $nome = $_REQUEST["nome"];

        $email = $_REQUEST["email"];

        $cidade = $_REQUEST["cidade"];

        $telefone = $_REQUEST["telefone"];

        $nascimento = $_REQUEST["nascimento"];

                      
        // Código para inserir as informações no BD.	
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL
        $sql = "UPDATE usuarios SET nome= :nome, email= :email, cidade= :cidade,
        telefone= :telefone, nascimento= :nascimento WHERE id_user= :id_user";

        //prepara a variavel sql 
        $altUser = $conn->prepare($sql);

        $altUser->bindValue(':id_user',$id_user);

        $altUser->bindValue(':nome',$nome);

        $altUser->bindValue(':email',$email);

        $altUser->bindValue(':cidade',$cidade);

        $altUser->bindValue(':telefone',$telefone);

        $altUser->bindValue(':nascimento',$nascimento);

        $altUser->execute();				

                        

        if ($altUser->rowCount() >= 1) {

            $retorno = array('codigo' => 1, 'mensagem' => 'Dados alterados com sucesso!');
            echo json_encode($retorno);
            exit();
            
        } else {   
            
            $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao alterar dados!!');
            echo json_encode($retorno);
            exit();
        }		

    } catch (PDOException $erro) {

        $retorno = array('codigo' => 2, 'mensagem' => 'Erro!');
        echo json_encode($retorno);
        exit();

    }
?>