<?php
    $numero = $_POST["numero"];

    switch ($numero)
    {
        case 1:
            echo "O primeiro mês do ano é JANEIRO";
            break;

        case 2:
            echo "O segundo mês do ano é FEVEREIRO";
            break;

        case 3:
            echo "O terceiro mês do ano é MARÇO";
            break;

        case 4:
            echo "O quarto mês do ano é ABRIL";
            break;

        case 5:
            echo "O quinto mês do ano é MAIO";
            break;

        case 6:
            echo "O sexto mês do ano é JUNHO";
            break;
            
        case 7:
            echo "O sétimo mês do ano é JULHO";
            break;

        case 8:
            echo "O oitavo mês do ano é AGOSTO";
            break;

        case 9:
            echo "O nono mês do ano é SETEMBRO";
            break;

        case 10:
            echo "O décimo mês do ano é OUTUBRO";
            break;

        case 11:
            echo "O décimo primeiro mês do ano é NOVEMBRO";
            break;

        case 12:
            echo "O décimo segundo mês do ano é DEZEMBRO";
            break;

        default:
            echo "O número digitado não representa um mês!";
    }