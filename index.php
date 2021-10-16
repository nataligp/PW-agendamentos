<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
            <meta name="format-detection" content="telephone=no">
            <meta name="msapplication-tap-highlight" content="no">
            <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
            <meta name="color-scheme" content="light dark">
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="css/estilo.css">
            <script src="js/jquery.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
            <title>Agendamento</title>
    </head>
    <body>
      <nav class="navbar navbar-dark bg-dark col-12">
            <a class="navbar-brand" href="index.html">Aplicativo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Agendamento<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="consulta.php">Consulta<span class="sr-only">(current)</span></a>
                  </li>
              </ul>
            </div>
          </nav>
                  <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Agendamento de vendas</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Sistema utilizado para agendamento de serviços</h6>
                              <form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" name="form" name="form">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nome:</label>
                                                <input type="text" class="form-control" name="txtNome">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">Telefone:</label>
                                              <input type="number" class="form-control" name="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlSelect1">Origem:</label>
                                              <select class="form-control" name="txtOrigem">
                                                <option>Celular</option>
                                                <option>Telefone fixo</option>
                                                <option>WhatsApp</option>
                                                <option>Facebook</option>
                                                <option>Instagram</option>
                                                <option>Google Meu Negócio</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlSelect2">Data do Contato:</label>
                                              <input type="date" class="form-control" name="txtDataContato">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1">Observação:</label>
                                              <textarea class="form-control" name="txtObservacao" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                          </form>
                              </div>
                            </div>
                          </div>
    </body>
</html>
