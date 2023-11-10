<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php
        include("conexao.php");
        $id = $_POST["registro"];
        $sql =  mysqli_query($banco, "select * from cadastro where id=$id;");
        $linhas = mysqli_num_rows($sql);
        echo "
            <p>Contato selecionado: </p>
            <form method='post' action='atualizarTabela.php'>
            <table>
        ";
        for ($i=0; $i < $linhas; $i++) { 
            $registro = mysqli_fetch_row($sql);
            echo"
                <tr>
                    <td><label for='registro'>REGISTRO</td>
                    <td><input type='text' name ='registro' value='$registro[0]' value='readonly'></td>
                </tr>
                <tr>
                    <td><label for='nome'>NOME</td>
                    <td><input type='text' name='nome' value='$registro[1]' id='nome'></td>
                </tr>
                <tr>
                    <td><label for='cpf'>CPF</td>
                    <td><input type='text' name='cpf' value='$registro[2]' id='cpf'></td>
                </tr>
                <tr>
                    <td><label form ='email'>EMAIL</td>
                    <td><input type ='email' name='email' value='$registro[3]' id='email'></td>
                </tr>
                <tr>
                    <td><label form = 'endereco'>ENDERECO</td>
                    <td><input type = 'text' name='endereco' value='$registro[4]' id='endereco'></td>
                 </tr>
            ";
        }
            echo"
                    <tr>
                        <td>
                            <input type='submit' value='CADASTRAR ATUALIZAÇÃO>
                        </td>
                    </tr>
                </table>
                </form>
            ";
            mysqli_close($banco);
    ?>
</body>
</html>