<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="atendente.css">
    <title>Lista de Atendentes</title>
</head>

<body>

    <table width="100%">
        <h1>Lista de Atendentes</h1>
        <thead>
            <tr>
                <th align="left">ID</td>
                <th align="left">Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <thead>
            <tbody>
                <?php
                $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico', 'root', '');
                $sql        = "SELECT * FROM atendente;";
                $dataset    = $conexao->query($sql);
                $resultset  = $dataset->fetchAll();

                foreach ($resultset as $row) {
                    echo '
                        <tr>
                            <td>' . $row['id'] . '</td>
                            <td>' . $row['nome'] . '</td>
                            <td align="center">
                                <a href="form.php?id=' . $row['id'] . '">Editar</a>
                            </td>
                            <td align="center">
                                <a href="crud.php?opcao=exlcuir&id=' . $row['id'] . '">Excluir</a>
                            </td>
                        </tr>
                    ';
                }
                ?>
            </tbody>
    </table>
</body>

</html>