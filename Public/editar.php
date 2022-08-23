<?php
    // PÁGINA PARA O FORMULÁRIO DE EDITAR OS USUÁRIOS
    
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
            # Passar para as variáveis como parâmetro os registros do banco de dados
            foreach($result as $users): 
            
            $nome = $users['nome'];
            $email = $users['email'];
            $senha = $users['senha'];
            $telefone = $users['telefone'];
            $endereco = $users['endereco'];
            $departamento = $users['departamento'];
            $salarioBase = $users['salarioBase'];
            $vt = $users['vt'];
            $irrf = $users['irrf'];
            $inss = $users['inss'];
            $numDependentes = $users['numDependentes'];
            endforeach; 
        }
        # Se não existir ele volta para a página da lista
        else 
        {
            header('Location: sistema.php');
        }       
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Incluir css para a cor de fundo das páginas -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- links do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>
<body>
    <!-- Formulário para o cadastro -->
        <br>
        <a href="sistema.php">Voltar</a>
        <section class="d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white shadow col-xs-12 col-sm-6 col-md-6 col-lg-4 p-4" style="border-radius: 1rem;">
                <div class="mb-4 d-flex justify-content-start align-items-center">
                </div>
                    <div class="mb-1">
                        <h3 class="text-center">FAZER CADASTRO </h3>
                        <br>
                        <form action="editarSalvar.php" method="POST">
                            <div class="mb-4 d-flex justify-content-between">
                                <div>
                                    <input type="text" class="form-control" name="nome" id="nome" class="inputUser" value="<?=$nome?>" required>
                                </div>
                                <div>
                                    <input type="password" class="form-control" name="senha" id="senha" class="inputUser" value="<?=$senha?>" required>
                                </div>
                            </div>
                            <br>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="email" id="email" class="inputUser" value="<?=$email?>" required>
                            </div>
                            <div class="mb-4">
                                <input type="tel" class="form-control" name="telefone" id="telefone" class="inputUser" value="<?=$telefone?>" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="endereco" id="endereco" class="inputUser"  value="<?=$endereco?>" required>
                            </div>
                            <div class="mb-4">
                            <input type="text" name="departamento" id="departamento" value="<?=$departamento?>" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="salarioBase" id="cidade" class="inputUser"  value="<?=$salarioBase?>" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="vt" id="vt" class="inputUser"  value="<?=$vt?>" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="irrf" id="irrf" class="inputUser"  value="<?=$irrf?>" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="inss" id="inss" class="inputUser"  value="<?=$inss?>" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="numDependentes" id="numDependentes" class="inputUser"  value="<?=$numDependentes?>" required>
                            </div>

                            <!-- Como não existe input para entrar com o id no formulário, criou-se um input do tipo hidden com ele como valor-->
                            <input type="hidden" name="id" value=<?=$id?>>
                            <p class="text-center">
                            <input type="submit" name="update" id="update" class="btn btn-outline-light btn-lg px-5">
                            </p>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </body>
</html>