<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php 

  include "conexao.php";

  $id = $_GET['id'] ?? '';
  $sql = "SELECT * FROM contatos WHERE cod_cliente = $id";

  $dados = mysqli_query($conn, $sql);

  $linha = mysqli_fetch_assoc($dados);

  ?>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Alterar</h1>
            <form method="POST" action="edit_script.php" >
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $linha['email'];?>">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone'];?>">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco'];?>">
                </div>
                <div>
                <br>
                <button type="submit" class="btn btn-info" value="Salvar Alterações">Salvar Alterações</button>
                <input type="hidden" name="id" value="<?php echo $linha['cod_cliente'];?>">
                <a href="pesquisa_bd.php" class= "btn btn-primary">Voltar para contato.php</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>