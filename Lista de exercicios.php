<html>
    <body>
        <h1>Exercício 1</h1>
<hr/>
        <form action="lista.php" method="POST">
            <label>Distância percorrida</label><br/>
            <input type="number" name="distancia" required/><br/><br/>
             <label>Litros consumidos</label><br/>
            <input type="number" name="litros" required/><br/><br/>
            <input type="submit" value="Calcular"/>
        </form>
    <?php
    if(isset($_POST['distancia'])){
        $km = $_POST['distancia'];
        $litros = $_POST['litros'];
        $cm = $km / $litros;
        echo "O consumo médio foi: ".$cm;
    }else {
        echo "";
    }
?>
<hr/>
        <h1>Exercício 2</h1>
<hr/>
        <form action="lista.php" method="POST">
            <label> Digite a temperatura em F</label><br/>
            <input type="number" name="farenheit" required/><br/><br/>
            <input type="submit" value="Calcular"/>
        </form>
    <?php
    if(isset($_POST['farenheit'])){
        $f = $_POST['farenheit'];
        $c = 5*($f-32)/9;
        echo "A temperatura em celsius é: ".$c;
    }else { echo "";
    }
    ?>
    <hr/>
        <h1>Exercício 3</h1>
    <hr/>
            <form action="lista.php" method="POST">
                <label>Digite um número</label><br/>
                <input type="number" name="numero"/><br/><br/>
                <input type="submit" value="Verificar"/>
    <?php
    if(isset($_POST['numero'])){
        $numero1 = $_POST['numero'];
            if ($numero1 % 2 == 0){
            echo "$numero1 é par.";
        }   else {
            echo "$numero1 é impar.";
        }
    }else {
        echo "";
    }
    ?>
    <hr/>
        <h1>Exercício 4</h1>
    <hr/>
        <form action="lista.php" method="POST">
            <label>Digite o seu salário atual</label><br/>
            <input type="number" name="salario" required/></br></br>
            <input type="submit" value="Calcular"/>
    </form>
    <?php
        if(isset($_POST['salario'])){
            $salario = $_POST['salario'];
            if($salario <= 280){
                $reajuste = 20;
                $aumento = $salario / 100 * $reajuste;
                $novosalario = $salario + $aumento;
                echo "Salário anterior: R$".number_format($salario,2);
                echo "Reajuste: ".$reajuste."%";
                echo "Valor do aumento: R$".number_format($aumento,2);
                echo "Novo salário: R$".number_format($novosalario,2);
            }
            elseif ($salario >= 280 && $salario <= 700){
                $reajuste = 15;
                $aumento = $salario / 100 * $reajuste;
                $novosalario = $salario + $aumento;
                echo "Salário anterior: R$".number_format($salario,2)."<br/>";
                echo "Reajuste: ".$reajuste."%<br/>";
                echo "Valor do aumento: R$".number_format($aumento,2)."<br/>";
                echo "Novo salário: R$".number_format($novosalario,2)."<br/>";
            }elseif ($salario >= 700 && $salario <= 1500){
                $reajuste = 10;
                $aumento = $salario / 100 * $reajuste;
                $novosalario = $salario + $aumento;
                echo "Salário anterior: R$".number_format($salario,2)."<br/>";
                echo "Reajuste: ".$reajuste."%<br/>";
                echo "Valor do aumento: R$".number_format($aumento,2)."<br/>";
                echo "Novo salário: R$".number_format($novosalario,2)."<br/>";
            }else {
                $reajuste = 5;
                $aumento = $salario / 100 * $reajuste;
                $novosalario = $salario + $aumento;
                echo "Salário anterior: R$".number_format($salario,2)."<br/>";
                echo "Reajuste: ".$reajuste."%<br/>";
                echo "Valor do aumento: R$".number_format($aumento,2)."<br/>";
                echo "Novo salário: R$".number_format($novosalario,2)."<br/>";
            }
        }else {
            echo "";
        }
    ?>
    </body>
</html>