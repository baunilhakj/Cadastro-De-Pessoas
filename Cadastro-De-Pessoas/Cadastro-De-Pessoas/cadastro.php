<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de cadastro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
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
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
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
    <h1>Cadastro</h1>
    <form action="cadastro_script.php" method="POST">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome">
        
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">
        
        <label for="telefone">Número de telefone:</label>
        <input type="text" id="telefone" name="telefone">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        
        <label for="data_nascimento">Data de nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento">
        
        <input type="submit" value="Salvar">
    </form>
    <a href="index.php" role="button">Voltar para o início</a>
</body>
</html>
