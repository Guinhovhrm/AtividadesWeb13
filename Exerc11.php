<?php 
    $casal = 2;
    $antipulgas = 1;
    $dias = 1;

    do{
        
        echo ("<b>dia: $dias </b><br>");
        $casal = $casal + ((int)($casal / 2) * 6);
        echo ("Total de pulgas após a fornicação: <b>$casal</b> <br><br>");
        if ($dias % 3 == 0){
            $casal = $casal - 2;
            echo ("Total de pulgas depois de 3 dias: <b>$casal</b> <br><br>");
        }
        $casal = $casal - $antipulgas;
        echo ("Total de pulgas depois de passar o antipulgas: <b>$casal</b> <br><br>");

        $antipulgas = $antipulgas * 4;
        $dias = $dias + 1;
    }while($casal > 0);
    echo ("O Cãozinho Pitoco Hiperativo Peludo (PHP) estará sem pulgas em <b>$dias</b> dias</p>");

?>