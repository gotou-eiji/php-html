<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    </head>
    <body>
        <?php
            $pos = $_GET['pos'];
            $pos2 = $pos + 1;
            $arquivo = fopen("dados.txt", "r");
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
            }
            $dados = explode(";", $linha);
            fclose($arquivo);
        ?>
        <center><h3>SisArray - TDS08</h3></center>
                <hr/>
                <br/>
            <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>&nbsp;<b>Editar</b></h4>
          </div>
          <div class="card-body text-start">
          <form action="edita.php?pos=<?php echo $pos; ?>" method="POST">
                <label class="form-label">Nome</label><br/>
                <input type="text" name="nome" class="form-control" value= "<?php echo $dados[$pos]; ?>" required/><br/></br>
                <label class="form-label">Idade</label><br/>
                <input type="number" name="idade" class="form-control" value= "<?php echo $dados[$pos2]; ?>" required/><br/><br/>
                <button type="submit" name="editar" class="btn btn-outline-dark">Atualizar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
    </body>
</html>