<?php
    $contador = 0;
    for($i=1;$i<=20;$i++){
        echo "$i<br/>";
    }for($i=20;$i>=1;$i--){
        echo "$i<br/>";
    }echo "<hr/>";
    while($contador < 10){
        echo $contador."<br/>";
        $contador++;
    }
?>