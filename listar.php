<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <?php 
        include("conexao.php");
        $sql = mysqli_query($banco,"select * from cadastro;");
        $linha = mysqli_num_rows($sql);
        echo "<p>LISTA DE DADOS</p><br>
        <table border = '1'>
        <tr>
            <td>REGISTRO</td>
            <td>NOME</td>
            <td>CPF</td>
            <td>EMAIL</td>
            <td>ENDEREÇO</td>
        </tr>
        ";
    for ($i=0; $i <$linha; $i++) { 
        $registro = mysqli_fetch_row($sql);
        echo "
                <tr>
                    <td>$registro[0]</td>
                    <td>$registro[1]</td>
                    <td>$registro[2]</td>
                    <td>$registro[3]</td>
                    <td>$registro[4]</td>
                </tr>
            ";
    }
    echo"</table>";
    mysqli_close($banco);  
    ?> 
    <a href="index.html">VOLTAR</a>   
</body>
</html>