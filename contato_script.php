<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conexão com bd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <?php 
        include "conexao.php";

        $nome = $_POST['nome'];
        $email= $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $mensagem = $_POST['mensagem'];
        
        $sql = "INSERT INTO `contatos`(`nome`, `email`, `telefone`, `endereco`, `mensagem`) 
        VALUES ('$nome','$email','$telefone','$endereco','$mensagem')";
        
       if (mysqli_query($conn, $sql)){
        msg("<h1>Mensagem enviada com sucesso!</h1>", 'info');
       }else 
       msg("<h1>Error!</h1>", 'danger');

        ?>
        <br>
        <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>