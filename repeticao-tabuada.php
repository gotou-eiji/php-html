<html>
    <body>
        <form action="atividade.php" method="POST">
            <label>Digite um número:</label>
            <input type="number" name="numero"/></br></br>
            <input type="submit" value="Gerar"/>
        </form>
        <?php
            if(isset($_POST['numero'])){
                $valor = $_POST['numero'];
                $numero = 0;
                for($numero = 1; $numero <=10; $numero++){
                    echo "$valor * $numero = ".$valor * $numero;
                    echo "</br>";
                }
                $numero++;
            }else {
                echo "";
            }
        ?>
    </body>
</html>