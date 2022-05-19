<html>
    <body>
        <h3>Teste de Banco - TDS08</h3>
        <hr/>
        <a href='index.php?id=$id'>Usuário</a> | <a href='contato.php?id=$id'>Contato</a>
        <hr/>
        <?php
            include 'conectacontato.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM contato WHERE id=$id";
            $query = $conn->query($sql);
            while($dados = $query->fetch_assoc()){
                $id = $dados['id'];
                $nome = $dados['nome'];
                $telefone = $dados['telefone'];
                $email = $dados['email'];
                $datanascimento = $dados['datanascimento'];
            }
        ?>
        <form action="edcontato.php?id=<?php echo $id; ?>" method="POST">
            Nome<br/>
            <input type="text" name="nome" value="<?php echo $nome; ?>"/><br/>
            Telefone<br/>
            <input type="tel" name="telefone" value="<?php echo $telefone; ?>"/><br/>
            Email<br/>
            <input type="email" name="email" value="<?php echo $email; ?>"/><br/>
            Data de Nascimento<br/>
            <input type="date" name="datanascimento" value="<?php echo $datanascimento; ?>"/><br/><br/>
            <input type="submit" value="Atualizar"/>
        </form>
        <br/>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>Data de Nascimento</td>
                <td>Ações</td>
            </tr>
            <?php
                include 'conectacontato.php';
                $pesquisa = mysqli_query($conn,"SELECT * FROM contato");
                $row = mysqli_num_rows($pesquisa);
                if($row > 0){
                    while($contato = $pesquisa->fetch_array()){
                        $id = $contato['id'];
                        echo "<tr>";
                        echo "<td>".$contato['id']."</td>";
                        echo "<td>".$contato['nome']."</td>";
                        echo "<td>".$contato['telefone']."</td>";
                        echo "<td>".$contato['email']."</td>";
                        echo "<td>".$contato['datanascimento']."</td>";
                        echo "<td><a href='editarcontato.php?id=$id'>Editar</a> | <a href='excluircontato.php?id=$id'>Excluir</a></td>";
                        echo "</tr>";
                    }
                    mysqli_close($conn);
                } else {
                    echo "Não há usuários para listar!";
                    mysqli_close($conn);
                }
            ?>
        </table>
    </body>
</html>