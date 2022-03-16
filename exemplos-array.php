<?php
    $a = array(1,2,3,4);
    $b = [5,6,7,8];
    print_r($a);
    echo "<br/>";
    print_r($b);
    echo "<br/>";
    echo $a[2];
    echo "<br/>";
    echo $b[3];
    echo "<br/>";
    echo "<hr/>"; 
    $array = array("chave1"=>1,"chave2"=>"PHP","chave3"=>"TDS08");
    print_r($array);
    echo "<br/>";
    echo $array["chave2"];
    echo "<br/>";
    echo $array["chave3"];
    echo "<br/>";
    foreach($array as $value){
        echo "$value<br/>";
    }
    echo "<hr/>";
    $arr = array("nome"=>"José","sobrenome"=>"Silva","idade"=>30);
    print_r($arr);
    echo "<br/>";
    echo "Nome: ".$arr["nome"]."<br/>";
    echo "Sobrenome ".$arr["sobrenome"]."<br/>";
    echo "Idade: ".$arr["idade"]."<br/>";
    echo "<hr/>";
    $array1 = array("primeiro","segundo");
    echo "Meu array<br/>";
    print_r($array1);
    $array1[]="terceiro";
    $array1[]="quarto";
    $array1[]="quinto";
    echo "<br/>";
    echo "Meu array após inserção<br/>";
    print_r($array1);
    echo "<hr/>";
    $array2 = array();
    print_r($array2);
    for($i=1;$i<=10;$i++){
        $array2[] = $i;
    }
    echo "Meu array após o laço de repetição<br/>";
    print_r($array2);
?>