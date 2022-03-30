<?php
ini_set('display_errors', 0 );
error_reporting(0);
    $alunos = ["Rafael",80,"Gabriel",76,"Vinicius",56,"Luis",93,"James",97,"Yuji",47,"Marta",82,"Goto",76,"Leafar",60,"Cesar",75];
    $notas = [];
    $aux = count($alunos);
    for($i=1;$i<=$aux;$i=$i+2){
        array_push($notas, $alunos[$i]);
    }
    for($j=0;$j<=($aux/2);$j++){
        $soma += $notas[$j];
    }
    $media = $soma / ($aux / 2);
    $notamaxima = max($notas);
    $maior = array_search($notamaxima, $notas) * 2;
    print "A média da classe é: " .$media. "<br/>A maior nota foi de: " .$alunos[$maior]. "<br/>Com a nota: " .$notamaxima;
?>