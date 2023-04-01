<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Guliver Travelller</title>
 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="enviarAjaxHotel.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Guliver Travelller</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </nav>

  
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Informações do hotel</h5>
            <form>
                <div class="form-group">
                  <label for="nome">Nome do hotel:</label>
                  <input type="text" class="form-control" id="nome" placeholder="Digite o nome do hotel">
                </div>
                <div class="form-group">
                  <label for="preco">Preço da diária:</label>
                  <input type="text" class="form-control" id="preco" placeholder="Digite o preço da diária">
                </div>
                <div class="form-group">
                  <label for="estado">Estado:</label>
                  <select class="form-control" id="estado">
                    
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
                <script src="index.js"></script>
</html>
