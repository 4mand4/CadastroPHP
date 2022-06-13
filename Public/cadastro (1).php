<?php
    // PÁGINA DE CADASTRO

    # Apenas fazer os comandos abaixo se o botão for pressionado. O isset verifica se uma variável está definida
    if(isset($_POST['submit']))
    {
        # Incluir página com a conexão com o banco de dados
        include_once('../config.php');

        # Passando o que recebeu no formulário como parâmetro para as variáveis
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $dataNasc = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        # Inserir os valores das variáveis acima no banco de dados com o comando INSERT INTO
        $result = mysqli_query($conexao, " INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$dataNasc','$cidade','$estado','$endereco')");

        # Para voltar para a tela de login após terminar o cadastro
        header('Location: login.php');
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
        <section class="d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white shadow col-xs-12 col-sm-6 col-md-6 col-lg-4 p-4" style="border-radius: 1rem;">
                <div class="mb-4 d-flex justify-content-start align-items-center">
                </div>
                    <div class="mb-1">
                        <h3 class="text-center">FAZER CADASTRO </h3>
                        <br>
                        <form action="cadastro.php" method="POST">
                            <div class="mb-4 d-flex justify-content-between">
                                <div>
                                    <input type="text" class="form-control" name="nome" id="nome" class="inputUser" placeholder="Nome" required>
                                </div>
                                <div>
                                    <input type="password" class="form-control" name="senha" id="senha" class="inputUser" placeholder="Senha" required>
                                </div>
                            </div>
                            <br>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="email" id="email" class="inputUser" placeholder="Email" required>
                            </div>
                            <div class="mb-4">
                                <input type="tel" class="form-control" name="telefone" id="telefone" class="inputUser" placeholder="Telefone" required>
                            </div>
                            
                            <div class="mb-4">
                            <label for="sexo"><i class="bi bi-gender-ambiguous"></i> Sexo: </label>
                            <input type="radio" class="form-check-input" id="feminino" name="genero" value="feminino" required>
                            <label for="feminino">Feminino</label>
                            <input type="radio" class="form-check-input" id="masculino" name="genero" value="masculino" required>
                            <label for="masculino">Masculino</label>
                            <input type="radio" class="form-check-input" id="outro" name="genero" value="outro" required>
                            <label for="outro">Outro</label>
                            </div>

                            <div class="mb-4">
                            <label for="dataNascimento"><b>Data de Nascimento:</b></label>
                            <input type="date" name="dataNascimento" id="dataNascimento" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="cidade" id="cidade" class="inputUser" placeholder="Cidade" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="estado" id="estado" class="inputUser" placeholder="Estado" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="endereco" id="endereco" class="inputUser" placeholder="Endereço" required>
                            </div>
                            <p class="text-center">
                            <input type="submit" name="submit" id="submit" class="btn btn-outline-light btn-lg px-5">
                            </p>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </body>
</html>