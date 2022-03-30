<?php
    $cpf = array(
        array('nome'=>'Rafael','cidade'=>'Maringá','idade'=>'17','sexo'=>'masculino'),
        array('nome'=>'Ana','cidade'=>'Santos','idade'=>'21','sexo'=>'feminino'),
        array('nome'=>'Paulo','cidade'=>'Curitiba','idade'=>'14','sexo'=>'masculino'),
        array('nome'=>'Yuji','cidade'=>'Maringá','idade'=>'21','sexo'=>'masculino'),
        array('nome'=>'Carlos','cidade'=>'Santos','idade'=>'34','sexo'=>'masculino'),
        array('nome'=>'Larissa','cidade'=>'Toledo','idade'=>'16','sexo'=>'feminino'),
        array('nome'=>'João','cidade'=>'Floresta','idade'=>'18','sexo'=>'masculino'),
        array('nome'=>'Marta','cidade'=>'Maringá','idade'=>'41','sexo'=>'feminino'),
        array('nome'=>'Felipe','cidade'=>'Paiçandu','idade'=>'17','sexo'=>'masculino'),
        array('nome'=>'Maria','cidade'=>'Floresta','idade'=>'19','sexo'=>'feminino')
    );
    foreach($cpf as $pessoa){
        echo "Nome: ".$pessoa['nome']."  /  Idade: ".$pessoa['idade'].'<br/>';
    }
    echo "<hr/>";
    foreach($cpf as $pessoa){
        if($pessoa['cidade'] == 'Santos'){
            echo 'Morador de Santos: '.$pessoa['nome'].'<br/>';
        }
    }
    echo "<hr/>";
    foreach ($cpf as $pessoa){
        if($pessoa['idade'] >= '18'){
            echo 'Maiores de 18 anos: '.$pessoa['nome'].'<br/>';
        }
    }
    echo "<hr/>";
?>