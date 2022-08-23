<!-- 
    PÁGINA PARA O LOGIN
    PÁGINA PARA FAZER A CONEXÃO DO LOGIN COM O BANCO DE DADOS E INICIAR UMA SESSÃO 
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<?php
# Inicia uma sessão
session_start();

# Verifica se o botão foi pressionado, e se foi declarado o nome e a senha.
if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['senha']))
{
    # Incluir página com a conexão com o banco de dados.
    include_once('../config.php');
    
    # Pega como parâmetro o nome e a senha e passa para as variáveis.
    $nome = $_POST['username'];
    $senha = $_POST['senha'];

    # Passa para a variável chamada $sql o comando SELECT que verifica
    # se esses parâmetros existem no banco de dados. 
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";

    # Passa a váriavel $sql para uma query. 
    # Query é uma solicitação ao banco de dados.
    # Result é o resultado dessa solicitação, vai passar o número de linhas que
    # existem no banco de dados com os parâmetros passados.
    # conexão é a várivel declarada no config.php
    $result = $conexao->query($sql);

    # Verifica se o número de linhas da variável result é menor que 1.
    if(mysqli_num_rows($result) < 1) {
        # O unset vai destruir os dados que tenham o nome e a senha declarados
        # que não existem no banco de dados.
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        ?>
            <h4 class="alert alert-danger d-flex justify-content-center" role="alert">
                Falha ao logar. Usuário ou senha incorretos!
            </h4>  
        <?php
        # Se não existir voltar para a página de login.  
    }else {

        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        # Se existir direcionar para a página index.
        header('Location: index.php');
    } 
}
?>
    <!-- Formulário para a tela de login -->
    <br>
    <br>
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-3">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form action="#" method="POST">
                        <!-- centralizar -->
                        <h2 class="text-center"> LOGIN </h2>
                        <p>
                        <div class="form-outline form-white mb-4">
                            <label for="username"></label>
                            <input type="text" name="username" class="form-control form-control-lg" placeholder="Nome">
                            </p>
                            <p>
                            <div class="form-outline form-white mb-4">
                                <label for="password"></label>
                                <input type="password" name="senha" class="form-control form-control-lg"
                                    placeholder="Senha">
                                </p>
                                <br>
                                <input type="submit" name="submit" class="btn btn-outline-light btn-lg px-5"
                                    value="Entrar">
                                <br><br>
                                <a href="cadastro.php" class="btn btn-outline-light btn-lg px-4">Cadastre-se</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>