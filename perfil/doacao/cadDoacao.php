<?php 

if(!isset($_SESSION)){
	session_start();
}
	
		$especie = $_REQUEST["especie"];
		$Sexo = $_REQUEST["Sexo"];
		$porte = $_REQUEST["porte"];
		$cor = $_REQUEST["cor"];
		$nome = $_REQUEST["nome"];
		$raca = $_REQUEST["raca"];
		$idade = $_REQUEST["idade"];
		$comentarios = $_REQUEST["comentarios"];
		
		$_FILES['arquivo']['name'];


		$datacadastro = date("Y-m-d");
				//Codigo upload
				date_default_timezone_set('America/Sao_Paulo');
				$data = date("d-m-Y");
				$time = date("H-i-s");

				//função random
				$num = rand(1,100000000000);

				//verifica o arquivo para upload

				$nomeimg = $_FILES["arquivo"]["name"];
				$temp = $_FILES["arquivo"]["tmp_name"];
				$tamanho = $_FILES["arquivo"]["size"];
				$tipoimg = $_FILES["arquivo"]["type"];
				$erro = $_FILES["arquivo"]["error"];

				$ext= pathinfo ($nomeimg, PATHINFO_EXTENSION);

				if(($ext != 'jpg') and ($ext != 'png')){
					echo "<script language=javascript> 
					alert('Só é possível fazer upload de arquivo com extensão JPG ou  PNG !!'); 
					location.href = 'doacao.php';
					</script>";
					exit;
				}

				if($tamanho > 900000){
					echo "<script language=javascript> 
					alert('Verifique o tamanho do seu arquivo'); 
					location.href = 'doacao.php';
					</script>";
					exit;
				}

				//renomear o nome da imagem
				$novo_nomeimg= 'imagem'.'-'.$data.'-'.$time.'-'.$num.'.'.$ext;

				//comando para mover o arquivo para a pasta
				$mover= move_uploaded_file($temp, '../imgAnimal/'.$novo_nomeimg);

				//criando o caminho do arquivo
				$arquivo = 'imgAnimal/'.$novo_nomeimg;

				$situacao = "0";

				//$_SESSION['sess_id_user'] = $id_user;
		
		try{

			include("conexao.php");

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO animais VALUES(:id_animal, :nome_animal, :cor, :raca, :idade, :especie, :Sexo, :porte, :comentarios, :arquivo, :datacadastro, :situacao, :id_user)";

			$result = $conn->prepare($sql);
			$result->bindValue(":id_animal", null);
			$result->bindValue(":nome_animal", $nome);
			$result->bindValue(":cor", $cor);
			$result->bindValue(":raca", $raca);
			$result->bindValue(":idade", $idade);
			$result->bindValue(":especie", $especie);
			$result->bindValue(":Sexo", $Sexo);
			$result->bindValue(":porte", $porte);
			$result->bindValue(":comentarios", $comentarios);
			$result->bindValue(":arquivo", $arquivo);
			$result->bindValue(":datacadastro", $datacadastro);
			$result->bindValue(":situacao", $situacao);
			$result->bindValue(":id_user", $_SESSION["sess_id_user"]);
			$result->execute();

			
				echo "<script language=javascript>
				alert('Cadastro feito com Sucesso');
				location.href = '../index.php';
				</script>";		

		}catch(PDOException $erro){
		
			echo "Falha ao cadastrar dados: ".$erro->getMessage();
		}



?>