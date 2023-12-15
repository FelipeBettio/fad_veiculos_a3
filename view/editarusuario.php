<h1>Editar Veículo</h1>
<?php
    // $sql= "SELECT * FROM usuario WHERE idUser=".$_REQUEST["id"];
    // $res = $conn->query($sql);
    // $row = $res->fetch_object();
    include("controller/PessoaController.php"); 
    $pegouId = $_REQUEST["id"];
    $row = PessoaController::pegaPessoaPeloId($pegouId);
    //echo "o id é: ".$row->idUser;

?>
<form action="?page=editar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="idCar" value="<?php print $row['idCar']; ?>">
    <div class="mb-3">
        <label>Tipo(Carro / Moto )</label>
        <input type="text" name="tipo" value="<?php print $row['tipo']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Modelo</label>
        <input type="text" name="modelo" value="<?php print $row['modelo']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" value="<?php print $row['descricao']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="number" name="ano" value="<?php print $row['ano']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" value="<?php print $row['cor']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço</label>
        <input type="number" name="preco" value="<?php print $row['preco']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Imagem 1</label>
        <input type="text" name="imagem1" value="<?php print $row['imagem1']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Imagem 2</label>
        <input type="text" name="imagem2" value="<?php print $row['imagem2']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Imagem 3</label>
        <input type="text" name="imagem3" value="<?php print $row['imagem3']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>