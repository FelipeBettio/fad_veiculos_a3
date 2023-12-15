<?php

class PessoaDAO
{
    private $conn;

    public function fazConexao()
    {
       try {
            $dsn = "mysql:host=localhost:3306;dbname=fad_veiculos";
            $this->conn = new PDO($dsn, 'root', '');
        } 
        catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    } 

    public function cadastrar(PessoaModel $model)
    {
        $this->fazConexao();
        $sql = "INSERT INTO carros (tipo,modelo,descricao,ano,cor,preco,imagem1,imagem2,imagem3) VALUES (?,?,?,?,?,?,?,?,?) ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1,$model->tip);
        $stmt->bindValue(2,$model->mod);
        $stmt->bindValue(3,$model->desc);
        $stmt->bindValue(4,$model->year);
        $stmt->bindValue(5,$model->color);
        $stmt->bindValue(6,$model->price);
        $stmt->bindValue(7,$model->img1);
        $stmt->bindValue(8,$model->img2);
        $stmt->bindValue(9,$model->img3);
        $res= $stmt->execute();
        if($res)
        {
            echo "<script>alert('cadastro realizado com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        else
        {
            echo "<script>alert('Não foi possível realizar o cadastro!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        
    }

    public function editar(PessoaModel $model)
    {
        $this->fazConexao();
         $sql = "UPDATE carros SET tipo=?,modelo=?,descricao=?,ano=?,cor=?,preco=?,imagem1=?,imagem2=?,imagem3=? WHERE idCar=?";
         $stmt = $this->conn->prepare($sql);
         $stmt->bindValue(1,$model->tip);
         $stmt->bindValue(2,$model->mod);
         $stmt->bindValue(3,$model->desc);
         $stmt->bindValue(4,$model->year);
         $stmt->bindValue(5,$model->color);
         $stmt->bindValue(6,$model->price);
         $stmt->bindValue(7,$model->img1);
         $stmt->bindValue(8,$model->img2);
         $stmt->bindValue(9,$model->img3);
         $stmt->bindValue(10,$model->id);
         $res= $stmt->execute();
         if($res)
         {
             echo "<script>alert('Registro alterado com sucesso!');</script>";
             echo "<script>location.href='?page=listar';</script>";
         }
         else
         {
             echo "<script>alert('Não foi possível realizar a alteração');</script>";
             echo "<script>location.href='?page=listar';</script>";
         }

    }

    public function pegaPessoaPeloId(int $Id)
    {
        $this->fazConexao();
        $sql= "SELECT * FROM carros WHERE idCar=".$Id;
        $res = $this->conn->query($sql);
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    
    
    
    public function excluir(int $Id)
    {
        $this->fazConexao();
        $sql = "DELETE FROM carros WHERE idCar=".$Id;
        $res = $this->conn->query($sql);
        if($res)
        {
            echo "<script>alert('Exclusão realizada com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        else
        {
            echo "<script>alert('Não foi possível excluir o usuário!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }

    }

    public function listarUsuarios()
    {
        $this->fazConexao();
        $sql= "SELECT * FROM carros ORDER BY tipo";
        return $this->conn->query($sql);
    }
}