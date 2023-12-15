<h1>Novo Veículo</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Tipo (Carro / Moto)</label>
        <input type="text" name="tipo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Modelo</label>
        <input type="text" name="modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="text" name="ano" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço</label>
        <input type="number" name="preco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Imagem 1</label>
        <input type="text" name="imagem1" class="form-control">
    </div>
    <div class="mb-3">
        <label>Imagem 2</label>
        <input type="text" name="imagem2" class="form-control">
    </div>
    <div class="mb-3">
        <label>Imagem 3</label>
        <input type="text" name="imagem3" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>