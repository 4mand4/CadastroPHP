<?php
    // PÁGINA PARA DELETAR USUÁRIOS
    
    # Incluir página com a conexão com o banco de dados
    include_once('../config.php');

    # Verificar se NÃO está vazio o parâmetro id
    if(!empty($_GET['id']))
    {
        # Variável id para receber o parâmetro
        $id = $_GET['id'];

        # Se sim, irá puxar os dados do banco de dados

        # Cria uma variável select para puxar do banco de dados as informações só do id informado.
        $sqlSelect = "SELECT * FROM usuarios WHERE id='$id'";
        
        # Variável result para armazenar o resultado da query da variável $sqlSelect.
        $result = $conexao->query($sqlSelect);

        # Verificar para ver se existe o registro, se $result for maior que zero.
        if($result->num_rows > 0)
        {
            # Se existir um resultado a variável $sqlDelete vai armazenar o comando de DELETE no banco de dados
            $sqlDelete = "DELETE FROM usuarios WHERE id='$id'";
            # Executar a query da variável $sqlDelete
            $result = $conexao->query($sqlDelete);
        }
            header('Location: sistema.php');      
    }