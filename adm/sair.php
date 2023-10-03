<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair</title>
</head>
<?php
	SESSION_START();

	require "../restrito.php";

?>

<body>
    <?php

if (!isset($_SESSION))
{
    session_start();
    session_destroy();

    header("location: ../index.html");


}
    ?>
</body>
</html>