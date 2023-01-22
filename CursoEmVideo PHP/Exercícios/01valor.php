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
$nome=$_GET["name"];
$ano=$_GET["ano"];
$sexo=$_GET["sexo"];
$idade= date("Y") - $ano;
echo " $nome do $sexo tem $idade de $ano"
?>
<a href="index.php"><button>voltar</button></a>
</body>
</html>