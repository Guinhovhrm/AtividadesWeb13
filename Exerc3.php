<?php 
    $num1 = 5;
    $num2 = 3;

    echo "Numero 1 antes era: $num1 <br>";
    echo "Numero 2 antes era: $num2 <br>";
    
    $num3 = $num1;
    $num1 = $num2;
    $num2 = $num3;

    echo "Numero 1 agora é: $num1 <br>";
    echo "Numero 2 agora é: $num2 <br>";
    
?>