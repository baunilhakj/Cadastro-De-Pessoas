<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Registro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }

        p {
            margin: 20px 0;
            color: #555;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <?php
    include "conexao.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM pessoas WHERE cod_pessoa = $id";

        if (mysqli_query($conn, $sql)) {
            echo "<h1>Exclusão de Registro</h1>";
            echo "<p>Registro excluído com sucesso!</p>";
        } else {
            echo "<h1>Exclusão de Registro</h1>";
            echo "<p>Erro ao excluir registro: " . mysqli_error($conn) . "</p>";
        }

        mysqli_close($conn);
    } else {
        echo "<h1>Exclusão de Registro</h1>";
        echo "<p>ID não especificado.</p>";
    }
    ?>

    <a href="pesquisa.php" role="button">Voltar</a>
</body>
</html>
