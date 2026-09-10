<?php
    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];
    if ($valorA < $valorB)
    {
        echo "Valores em ordem CRESCENTE: $valorA, $valorB";
    }
    else if ($valorB < $valorA)
    {
        echo "Valores em ordem CRESCENTE: $valorB, $valorA";
    }
    else
    {
        echo "Os valores digitados são iguais: $valorA";
    }