<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Tabela</title>
</head>
<body>
    
    <?php
        include("conexao.php");
        $id = $_POST['registro'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        
        $sql = mysqli_query($banco,"Update Cadastro set nome='$nome', cpf='$cpf', email='$email', endereco='$endereco' where id=$id;");

        if ($sql) {
            echo"Dados Atualizados com Sucesso";
        }
        else{
            echo"Erro em Atualizar os Dados.<br>Causa: ".mysqli_error($banco);
        }
        mysqli_close($banco);
    ?>

</body>
</html>