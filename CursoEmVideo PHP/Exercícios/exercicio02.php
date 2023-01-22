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
    $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
    echo "<br>";
    $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;

    $r = ($n1+$n2) / 2;

    echo "<br> Nota 1: $n1 <br> Nota 2: $n2 <br> Sua média é: $r <br> ";
    if($r>=6){
        echo "APROVADO!";
        }else{
        echo "REPROVADO!";
        }

    ?>
  <BR>
    <a href="exercicio2.php">voltar</a>
</body>
</html>