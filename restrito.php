<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if((!isset($_SESSION['sess_name_user'])) and (!isset($_SESSION['sess_email_user']))){
              
            //header("location.href:index.php");

            echo "<script language=javascript> 
					alert('Voce nao tem permissão para acessar esta pagina !!!'); 
					location.href = 'index.php';
					</script>";
        }
    ?>
</body>
</html>