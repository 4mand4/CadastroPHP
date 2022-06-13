<?php
//PÁGINA COM O CÓDIGO PARA ATUALIZAR A LISTA DE USUÁRIOS 

# Incluir página com a conexão com o banco de dados
include_once('../config.php');

# Verificar se o botão de update foi selecionado, se foi declarado.
if(isset($_POST['update'])) 
{
        # Passando o que recebeu no formulário como parâmetro para as variáveis
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $dataNasc = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        # A variável $sqlUpdate armazena o comando de UPDATE para atualizar os dados no banco de dados conforme o id selecionado.
        $sqlUpdate = "UPDATE usuarios SET nome='$nome', senha='$senha', email='$email', telefone='$telefone', sexo='$sexo', data_nasc='$dataNasc',
        cidade='$cidade', estado='$estado', endereco='$endereco' WHERE id='$id'";

        # A variável result pega o resultado da query que tem como requisição o comando da $sqlUpdate.
        $result = $conexao->query($sqlUpdate);
}
# Voltar para a página anterior
header('Location: sistema.php');


?>