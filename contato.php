<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - VERGANG IT CO</title>
  <link rel="stylesheet" href="./framework/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="./main.css">
  <script src="./js/script.js"></script>
</head>
<body>
  <header>
    <div class="top-bar bg-primary-color">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <a href="index.php"><img src="./logoprincipal.jpeg" alt="VERGANG IT CO" class="img-fluid logo" /></a>
          </div>
          <div class="col-1 col-md-9 mobile-nav">
            <nav>
              <a href="index.php">Home</a>
              <a href="planos.php">Planos</a>
              <a href="contato.php">Contato</a>
              <a href="https://www.facebook.com/profile.php?id=100083516740699" target="_blank"><img src="./logoface.png" alt="Facebook" class="social-links" /></a>
              <a href="https://www.instagram.com/vergang_tecnology/?igshid=YmMyMTA2M2Y%3D" target="_blank"><img src="./logoinsta.png" alt="Instagram" class="social-links" /></a>
            </nav>
          </div>
          <div class="col-8 d-flex justify-content-end align-items-center d-md-none">
            <a href="#" class="menu-toggle"><img src="./menu.png" alt="Menu" /></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="section-title">
    <div class="container">
      <h1>Fale Conosco</h1>
    </div>
  </section>
  <main>
    <div class="container">
      <form action="contato_script.php" method="POST" class="row g-3">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome</label>
          <input name="nome" type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="telefone" class="form-label">Telefone</label>
          <input name="telefone" type="number" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="endereoo" class="form-label">Endereço</label>
          <input name="endereco" type="text" class="form-control" placeholder="Rua Josepha Zaglobynski Krapt, 9784 - Jardim Bela Vista">
        </div>
        <div>
            <textarea name="mensagem" type="text" rows="10" class="form-control" placeholder="Escreva sua mensagem..."></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar mensagem</button>
          </div>
      </form>
    </div>
  </main>
  <footer class="bg-primary-color">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-3">
          <img src="./vgtech.jpeg" alt="VERGANG IT CO" class="img-fluid mx-auto">
        </div>
        <div class="col-md-5">
          <h6>VERGANG® É UMA MARCA REGISTRADA LTDA</h6>
          <p>CNPJ: 41.743.101/0001-30</p>
          <p>Rua Josepha Zaglobynski Krapt, 9784</p>
          <p>Jardim Bela Vista, Itapetininga - SP</p>
          <p>CEP: 18207-740</p>
        </div>
        <div class="col-md-4">
          <p>E-mail: <a href="mailto:vergang@gmail.com">vergang@gmail.com</a></p>
          <p>Telefone: <a href="">(11) 14283-1078</a></p>
          <p>Whatsapp: <a href="">(11) 94283-1078</a></p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>