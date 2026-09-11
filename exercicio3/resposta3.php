<?php
    $valor = $_POST["valor"];
    if ($valor > 100)
    {
        $desconto = $valor - ($valor * (15 / 100));
        echo "VOCÊ GANHOU DESCONTO!";
        echo "<p>";
        echo "O novo valor do produto é: R$$desconto";
    }
    else
    {
        echo "Desconto NÃO aprovado sobre o valor de R$$valor!";
    }