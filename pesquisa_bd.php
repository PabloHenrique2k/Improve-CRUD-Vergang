<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <?php

    $pesquisa = $_POST['busca'] ?? '';


    include "conexao.php";

    $sql = "SELECT * FROM contatos WHERE email LIKE '%$pesquisa%' or nome LIKE '%$pesquisa%'";
    

    $dados = mysqli_query($conn, $sql);

    ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <h1>Pesquisar</h1>
                        <form class="d-flex" action="pesquisa_bd.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome/Email" aria-label="Search" name="busca">
                            <button class="btn btn-outline-success" type="submit"> Procurar</button>
                        </form>
                        <a href="contato.php" class="btn btn-primary">Voltar para contatos</a>
                    </div>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $cod_cliente = $linha['cod_cliente'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];
                            $telefone = $linha['telefone'];
                            $endereco = $linha['endereco'];

                            echo "<tr>
                                    <th scope='row'>$nome</th>
                                    <td>$email</td>
                                    <td>$telefone</td>
                                    <td>$endereco</td>
                                    <td><a href='contato_editar.php?id=$cod_cliente' class='btn btn-primary'>Editar</a> 
                                    <a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'
                                    onclick=" .'"'."get_data($cod_cliente, '$nome')".'"'.">Excluir</a></td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar Exclusão</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="excluir_script.php" method="POST">
                   <p>Você realmente quer excluir esse cliente?</p>
                   <b id="nome_cliente"></b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não!!!</button>
                    <input type="hidden" name="id" id="cod_cliente" value="">
                    <input type="hidden" name="nome" id="nome_cliente1" value="">
                    <input type="submit" class="btn btn-primary" value="Sim"></input>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function get_data(id, nome) {
            document.getElementById('nome_cliente').innerHTML = nome;
            document.getElementById('nome_cliente1').value = nome;
            document.getElementById('cod_cliente').value = id;
        }


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>