<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <form action="listaexercicios.php" method="POST">
            <h1>Exercício 1 (Repetir 9 vezes seu nome)</h1>
        <hr>
            <label>Escreva seu nome:</label></br>
            <input type="text" name="nome"/></br></br>
            <input type="submit" value="Gerar"/>
        <hr>
            <h1>Exercício 2 (Imprimir apenas números pares até 80)</h1>
        <hr>
            <label>Números pares até 80</label></br>
            <input type="submit" value="Gerar"/>
        <hr>
            <h1>Exercício 3 (Receber dois números e imprimir o valor inicial até o final)</h1>
        <hr>
            <label>Digite o valor de entrada:</label></br>
            <input type="number" name="valor1"/></br>
            <label>Digite o valor de saída:</label></br>
            <input type="number" name="valor2"/></br></br>
            <input type="submit" value="Gerar"/></br></br>
        <hr>
            <h1>Exercício 4 (Calcular 8% do primeiro produto, 11% no segundo e apresentar valor final)</h1>
        <hr>
            <label>Digite o valor do primeiro produto:</label></br>
            <input type="number" name="produto1"/></br>
            <label>Digite o valor do segundo produto:</label></br>
            <input type="number" name="produto2"/></br></br>
            <input type="submit" value="Calcular"/></br></br>
        <hr>
            <h1>Exercício 5 (Cubo)</h1>
        <hr>
            <label>Digite um número</label></br>
            <input type="number" name="cubo"/></br></br>
            <input type="submit" value="Gerar"/></br></br>
        </form>
        <?php
            if(isset($_POST['nome'])){
                $name = $_POST['nome'];
                $aux = 0;
                for($aux = 1; $aux <= 9; $aux++){
                    echo $name. "<br/>";
                }
            }else {
                echo "";
            }if(isset($_POST['pares'])){
                $numeros = 0;
                $cont = 0;
                while($cont <= 80){
                    if($cont % 2 == 0){
                        echo "$cont / ";
                    }$cont++;
                }
            }else {
                echo "";
            }if(isset($_POST['valor1'])){
                $numero1 = $_POST['valor1'];
                $numero2 = $_POST['valor2'];
                if($numero1 < $numero2){
                    while($numero1 <= $numero2){
                    echo $numero1. "<br/>";
                    $numero1++;
                }
                }else{
                    while($numero1 >= $numero2){
                    echo $numero1. "<br/>";
                    $numero1--;
                }
            }
            }else {
                echo "";
            }if(isset($_POST['produto1'])){
                $vp1 = $_POST['produto1'];
                $vp2 = $_POST['produto2'];
                $cvp1 = ($vp1 / 100) * 92;
                $cvp2 = ($vp2 / 100) * 89;
                $vf = $cvp1 + $cvp2;
                echo "Valor final para ser pago: $vf";
            }else {
                echo "";
            }if(isset($_POST['cubo'])){
                $inicial = $_POST['cubo'];
                $cubo = ($inicial * $inicial * $inicial);
                    while($inicial <= $cubo){
                    echo " / $inicial";
                    $inicial++;
                    }
                }else {
                    echo "";
                }
        ?>
    </body>
</html>