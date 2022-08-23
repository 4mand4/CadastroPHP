<?php
// PÁGINA PARA INCLUIR O MENU E A SESSÃO

# Inicia uma sessão
session_start();
//print_r($_SESSION);

# Verifica se NÃO existe uma váriavel nome e senha na sessão, 
# se não existir volta para a página de login
if((!isset($_SESSION['nome']) == true) && (!isset($_SESSION['senha']) == true))
{
    # Se não existir destruir qualquer dado que tenha na sessão que tenha um nome e senha.
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    # Se o resultado for "true" e não existir volta para a página de login
    header('Location: login.php');
}
# Se existir manda para a variável $logado o nome definido na sessão.
$logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- css para o background da tela -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- links do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">INICIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="sistema.php">SISTEMA</a>
            </li>
          </ul>
        </div>   
            <a class="navbar-brand">Bem vindo, <?=$logado; ?></b></a>
            <a class="btn btn-outline-light me-3" href="logout.php">Sair</a>
      </div>
          
    </nav>
</body>
</html>