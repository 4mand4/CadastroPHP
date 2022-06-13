<?php
# Incluir página com de conexão com o banco de dados
include_once('../config.php');

# Passa para a variável chamada $sql o comando SELECT que verifica
# se esses parâmetros existem no banco de dados. 
$sql = "SELECT * FROM usuarios ORDER BY id ASC";

# Passa a váriavel $sql para uma query. 
# Query é uma solicitação ao banco de dados.
# Result é o resultado dessa solicitação, vai passar o número de linhas que
# existem no banco de dados com os parâmetros passados.
# conexão é a várivel declarada no config.php
$result = $conexao->query($sql);
//print_r($result); mostrar o resultado
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA</title>
</head>

<body>
    <!--Incluir header -->
    <?php include 'header.php'; ?>

    <br>
    <table class="table table-dark table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SEXO</th>
                <th>NASCIMENTO</th>
                <th>TELEFONE</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
                <th>ENDEREÇO</th>
                <th>ALTERAR</th>
                <th>REMOVER</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $users) : ?>
            <tr>
                <td><?= $users['id'] ?></td>
                <td><?= $users['nome'] ?></td>
                <td><?= $users['email'] ?></td>
                <td><?= $users['sexo'] ?></td>
                <td><?= $users['data_nasc'] ?></td>
                <td><?= $users['telefone'] ?></td>
                <td><?= $users['cidade'] ?></td>
                <td><?= $users['estado'] ?></td>
                <td><?= $users['endereco'] ?></td>
                <td>
                    <!-- Botão que direciona para a página de alterar conforme o id da linha clicada -->
                    <a class='btn btn-sm btn-light' href='editar.php?id=<?=$users['id']?>'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path
                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>
                    </a>
                </td>
                <td>
                    <a class='btn btn-sm btn-danger' href='editarDeletar.php?id=<?=$users['id']?>'>
                        <!-- Botão que direciona para a página de remover -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tdbody>
    </table>
</body>

</html>