<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="01valor.php">
    nome:<input type="text" name="name"/><br>
    Ano nascimento:<input type="number" name="ano"/><br>

    <fieldset><legend>sexo</legend>
    <input type="radio" name="sexo" id="masc" value="homem"/>
    <label for="masc">masculino</label><br>
    <input type="radio" name="sexo" id="fem" value="mulher"/>
    <label for="fem">feminino</label><br>
    <fieldset><br>

    <input type="submit" value=" enviar "/>
</form>

</body>
</html>