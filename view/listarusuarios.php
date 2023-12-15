<h1>Listar Veículos</h1>
<?php
    // $sql = "SELECT * FROM usuario ORDER BY nomeUser";
    // $res = $conn->query($sql);
    // $qtd = $res->num_rows;
    include("controller/PessoaController.php"); 
    $res = PessoaController::listarUsuarios();
    $qtd = $res->rowCount();
    if($qtd>0){
        print"<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Modelo</th>"; 
        print "<th>Ano</th>";
        print "<th>Preço</th>";
        print "<th>Ações</th>";
        print"</tr>";
        while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->idCar."</td>";
            print "<td>".$row->modelo."</td>"; 
            print "<td>".$row->ano."</td>";
            print "<td>".$row->preco."</td>";
            print "<td>
                        <button onclick=\"location.href='?page=alterar&id=".$row->idCar."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseeja excluir?')){location.href='?page=excluir&id=".$row->idCar."';}else{false;}\"class='btn btn-danger'>Excluir</button>
                    </td>";
            print"</tr>";
        }
        print"</table>";
    }
    else{
        echo "<p class='alert alert-danger'>Nenhum registro encontrado!</p>";
    }

?>