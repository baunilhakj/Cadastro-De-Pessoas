<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
    ?>

    <h1>Cadastro</h1>
    <form action="edit_script.php" method="POST">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required value="<?php echo $linha['nome']; ?>">
        
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required value="<?php echo $linha['endereco']; ?>">
        
        <label for="telefone">Número de telefone:</label>
        <input type="text" id="telefone" name="telefone" required value="<?php echo $linha['telefone']; ?>">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required value="<?php echo $linha['email']; ?>">
        
        <label for="data_nascimento">Data de nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required value="<?php echo $linha['data_nascimento']; ?>">

        <input type="submit" value="Salvar alterações">
        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
    </form>
    
    <a href="index.php" role="button">Voltar para o início</a>
</body>
</html>
