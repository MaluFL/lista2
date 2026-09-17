<?php
    $numero = $_POST["numero"];
    $soma = 0;
    $i = 1;
    while ($i <= $numero) {
        $soma += $i;
        $i++;
    }
    echo "A soma de 1 até $numero é: $soma";