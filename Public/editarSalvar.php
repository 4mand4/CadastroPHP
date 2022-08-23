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
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $departamento = $_POST['departamento'];
        $salarioBase = $_POST['salarioBase'];
        $vt = $_POST['vt'];
        $irrf = $_POST['irrf'];
        $inss = $_POST['inss'];
        $numDependentes = $_POST['numDependentes'];

        # A variável $sqlUpdate armazena o comando de UPDATE para atualizar os dados no banco de dados conforme o id selecionado.
        $sqlUpdate = "UPDATE usuarios SET nome='$nome', senha='$senha', email='$email', telefone='$telefone', endereco='$endereco', departamento='$departamento', salarioBase='$salarioBase',
        vt='$vt', irrf='$irrf', inss='$inss', numDependentes='$numDependentes' WHERE id='$id'";

        # A variável result pega o resultado da query que tem como requisição o comando da $sqlUpdate.
        $result = $conexao->query($sqlUpdate);
}
# Voltar para a página anterior
header('Location: sistema.php');


?>