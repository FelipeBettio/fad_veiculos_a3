<?php
    include_once './conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fad Veiculos - Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
    <div class="container">
    <h1 class="display-2 mt-3 mb-5">Carros</h1>

        
    <?php
        $query_carros = "SELECT id, modelo, ano, cor, preco, imagem1, imagem2, imagem3, descricao FROM carros ORDER BY id ASC";
        $result_carros = $conn->prepare($query_carros);
        $result_carros->execute();
    ?>
        <div class="row row-cols-3 row-cols-md-3 g-4">
    <?php
        while($row_carro = $result_carros->fetch(PDO::FETCH_ASSOC)){
            extract($row_carro);
            /*echo "<img src='./imagem/$imagem'><br>";
            echo "ID: " . $id . "<br>";
            echo "Modelo: " . $modelo . "<br>";
            echo "Ano: " . $ano . "<br>";
            echo "Cor: " . $cor . "<br>";
            echo "Preço: R$" . number_format($preco, 2, ",", ".") . "<br>";
            echo "<hr>";*/

            
            ?>
            <div class="col">
                <div class="card h-100 card border-light mb-3">
                    <!-- CARROSSEL --> 
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src='<?php echo "./imagem/$imagem1" ?>' class="d-block w-100 card-img-top h-90">
                        </div>
                        <div class="carousel-item">
                        <img src='<?php echo "./imagem/$imagem2" ?>' class="d-block w-100 card-img-top h-100">
                        </div>
                        <div class="carousel-item">
                        <img src='<?php echo "./imagem/$imagem3" ?>' class="d-block w-100 card-img-top h-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                    <div class="card-body shadow p-3 mb-5 bg-body-tertiary rounded">
                        <h5 class="card-title"><?php echo $modelo ?></h5>
                        <p class="card-text"><?php echo $descricao ?></p>
                        <div class="container text-center">
                        <span class="badge bg-danger w-40 p-3 fs-6 "><?php echo "R$" . number_format($preco, 2, ",", ".")?></span>
                        </div>
                    </div>
                    
                </div>
            </div>
                
            <?php
        }
    ?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>