<?php

class PessoaController
{


    public static function cadastrar()
    {
        include 'model/PessoaModel.php';
        $model = new PessoaModel();
        $model->tip = $_POST["tipo"];
        $model->mod = $_POST["modelo"];
        $model->desc = $_POST["descricao"];
        $model->year = $_POST["ano"];
        $model->color = $_POST["cor"];
        $model->price = $_POST["preco"];
        $model->img1 = $_POST["imagem1"];
        $model->img2 = $_POST["imagem2"];
        $model->img3 = $_POST["imagem3"];
        $model->cadastrar();
    }

    public static function editar()
    {
        include 'model/PessoaModel.php';
        $model = new PessoaModel();
        $model->id = $_POST["idCar"];
        $model->tip = $_POST["tipo"];
        $model->mod = $_POST["modelo"];
        $model->desc = $_POST["descricao"];
        $model->year = $_POST["ano"];
        $model->color = $_POST["cor"];
        $model->price = $_POST["preco"];
        $model->img1 = $_POST["imagem1"];
        $model->img2 = $_POST["imagem2"];
        $model->img3 = $_POST["imagem3"];
        $model->editar();
    }

    public static function pegaPessoaPeloId(int $Id)
    {
        include 'model/PessoaModel.php';
        $model = new PessoaModel();
        $model->id = $Id;
        return $model->pegaPessoaPeloId($Id);
    }

    public static function excluir()
    {
        $meuId = $_REQUEST["id"];
        include 'model/PessoaModel.php';
        $model = new PessoaModel();
        $model->excluir($meuId);
    }

    public static function listarUsuarios()
    {
        include 'model/PessoaModel.php';
        $model = new PessoaModel();
        return $model->listarUsuarios();
    }



}



