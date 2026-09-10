<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $soma = $valor1 + $valor2;
    if ($valor1 == $valor2)
    {
        $triplo = $soma * 3;
        echo "Valores iguais!!";
        echo "<p>";
        echo "O triplo da soma é: $triplo";
    }
    else 
    {
        echo "A soma dos valores é: $soma";
    }