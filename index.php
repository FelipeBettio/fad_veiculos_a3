<?php
    include_once './conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fad Veiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body style="background-color:#DC3545">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <div id="header" class="shadow p-1 mb-5">
        <a href="index.php" class="logo">
            <img src="./imagem/logoFAD.png" style="width:22%">
        </a>
        <div class="header-right">
          <a class="active" href="index.php">Home</a>
          <a class="font" href="carros.php">Carros</a>
          <a class="font" href="motos.php">Motos</a>
          <a class="font" href="admin.php">Admin</a>
        </div>
      </div>
    <!-- CARROSSEL -->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="container carousel-inner w-75 shadow-lg p-0 mb-5">
            <div class="carousel-item active">
            <a href="carros.php">
                <img src="./imagem/banner1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <span class="badge bg-black bg-opacity-75 w-40 p-3 fs-6 ">
                    
                    <h5>Você de carro novo!</h5>
                    <p>Nao perca tempo, venha conferir nosso estoque!</p>
                    
                </span>
            </div>
            </a>
            </div>
            <div class="carousel-item">
            <a href="motos.php">
            <img src="./imagem/banner2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <span class="badge bg-black bg-opacity-75 w-40 p-3 fs-6 ">
                    <h5>Gosta de aventura?</h5>
                    <p>Venha conferir nosso estoque de motos de todas cilindradas!</p>
                </span>
            </div>
            </a>
            </div>
            <div class="carousel-item">
            <a href="carros.php">
            <img src="./imagem/banner3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <span class="badge bg-black bg-opacity-75 w-40 p-3 fs-6 ">
                    <h5>Aceitamos todos tipos de banco</h5>
                    <p>Nao deixe pra depois o que você pode financiar agora!</p>
                </span>
            </div>
            </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer class="footer">Todos direitos reservados ©</footer>
</html>