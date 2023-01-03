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

$op = isset($_GET["es"])?$_GET["es"]:x;
    switch ($op){
        case "SP":
            ECHO " Você mora em SAO PAULO";
        break;
            case 'RJ':
                ECHO " Você mora em RIO DE JANEIRO";
                break;
                case 'BR':
                    ECHO " Você mora em BRASILIA";
                    break;
                    case 'MT':
                        ECHO " Você mora em MATO GROSSO";
                        break;
                        case 'GO':
                            ECHO " Você mora em GOIAS";
                            break;
                            case 'PR':
                                ECHO " Você mora em PARANA";
                                break;
    }

?>
<BR>
<a href="exercicio5.php">VOLTAR</a>
</body>
</html>