<html>
    <body>
        <form action="travazap.php" method="POST">
            <label>Digite o primeiro valor:</label>
            <input type="number" name="valor1"/><br/><br/>
            <label>Digite o segundo valor:</label>
            <input type="number" name="valor2"/><br/><br/>
            <input type="submit" value="VAI!"/>
        </form>
    <?php
        if(isset($_POST['valor1'])){
            $numero1 = $_POST['valor1'];
            $numero2 = $_POST['valor2'];
            if($numero1 < $numero2){
                while($numero1 <= $numero2)
                echo $numero1. "<br/>";
                $numero1++;
            }else{
                while($numero1 >= $numero2){
                echo $numero1. "<br/>";
                $numero1--;
                }
            }
        }else {
        echo "";
        }
    ?> 
        </body>
</html>