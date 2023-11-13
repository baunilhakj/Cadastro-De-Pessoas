<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
        }

        nav {
            margin: 20px 0;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        a {
            display: inline-block;
            margin: 10px;
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
        $pesquisa = $_POST['busca'] ?? '';
        include "conexao.php";
        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
        $dados = mysqli_query($conn, $sql);
    ?>

    <h1>Pesquisar</h1>
    <nav>
        <form action="pesquisa.php" method="POST">
            <input type="search" placeholder="Nome" name="busca">
            <button type="submit">Pesquisar</button>
        </form>
    </nav>

    <table>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($linha = mysqli_fetch_assoc($dados)) {
                    $cod_pessoa = $linha['cod_pessoa'];
                    $nome = $linha['nome'];
                    $endereco = $linha['endereco'];
                    $telefone = $linha['telefone'];
                    $email = $linha['email'];
                    $data_nascimento = $linha['data_nascimento'];
                    $data_nascimento = mostra_data($data_nascimento);

                    echo "<tr>
                        <th scope='row'>$nome</th>
                        <td>$endereco</td>
                        <td>$telefone</td>
                        <td>$email</td>
                        <td>$data_nascimento</td>
                        <td>
                            <a href='editar.php?id=$cod_pessoa'>Editar</a>
                            <a href='#' onclick='confirmarExclusao($cod_pessoa, \"$nome\")'>Excluir</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    
    <a href="index.php" role="button">Voltar para o início</a>

    <script>
        function confirmarExclusao(cod_pessoa, nome) {
            var resposta = confirm("Deseja realmente excluir " + nome + "?");

            if (resposta) {
                window.location.href = "excluir.php?id=" + cod_pessoa;
            }
        }
    </script>
</body>
</html>
