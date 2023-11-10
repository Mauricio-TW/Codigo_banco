<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
    <?php
        include("conexao.php");
        $registro = $_POST['$registro'];
        $sql = mysqli_query($banco, "delete from cadastro where id = $registro;");
        if ($sql) {
            echo"Dado apagado com sucesso.<br>";
            echo"<META http-equiv-equiv='refresh' content='2;URL=index.html'>";
        }
        else{
            echo"Erro ao apagar o dado.<br>";
        }
    ?>
<body>
    
</body>
</html>