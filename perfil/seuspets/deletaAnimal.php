<?php
try {

        	$id = $_REQUEST['id_animal'];

            //importa o arquivo de conexão
            include "conexao.php";

            //abre a conexão
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //ARMAZENAR O COMANDO DE INSERÇÃO DE DADOS NA VARIAVEL SQL
            $sql = "DELETE FROM animais WHERE id_animal = :id_animal";

            //prepara a variavel sql de exclusao
            $delete = $conn->prepare($sql);

            //passa os valores passados na variavel ex
            $delete->bindValue(':id_animal', $id);
                
            //executa o comando de exclusao
            $delete->execute();

            //informa o usuario que os dados foram excluidos
            if ($delete->rowCount() >= 1) {

                $retorno = array('codigo' => 1, 'mensagem' => 'Excluido com sucesso!');
                echo json_encode($retorno);
                exit();

            } else {   

                $retorno = array('codigo' => 2, 'mensagem' => 'Esse animal não existe!!');
                echo json_encode($retorno);
                exit();
            }

        } catch(PDOException $erro) {

            $retorno = array('codigo' => 2, 'mensagem' => 'Erro ao excluir animal!');;
            echo json_encode($retorno);
            exit();
            //echo "Falha ao cadastrar dados: ".$erro->getMessage();
        }
            

?>