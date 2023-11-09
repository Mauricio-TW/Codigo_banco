<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir no BD</title>
</head>
<body>
    <?php

        //importação dos dados do BD no mysql
        include("conexao.php");
        //Valores digitados na interface(index.HTML)
        $nome     = $_POST["nome"];
        $cpf      = $_POST["cpf"];
        $email    = $_POST["email"];
        $endereco = $_POST["endereco"];
        //query do sql
        $sql = mysqli_query($banco,"insert into cadastro values(null,'$nome', '$cpf', '$email', '$endereco');");
        if ($sql) {
            echo "Contato cadastrado com sucesso.<br>";
        }
        else{
            echo "Não foi possivel cadastrar.<br>Causa: ".mysqli_error($banco);
        }
        mysqli_close($banco);

    ?>
    </body>
</html>