
<!---- Serve para mostrar a lista de clientes --->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Listagem de clientes</h1>
    <a href="servicos.php">Adiciopnar novo cliente</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>

        <?php include "includes/conexao.php";

        $sql = "select from * clientes ";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>{$linha['id']}</td>";
            echo "<td>{$linha['nome']}</td>";
            echo "<td>{$linha['email']}</td>";
            echo "<td> Aqui vão as ações </td>";
            echo "</td>";


        }

        mysqli_close($conexao);
        ?>
    </table>
</body>

</html>