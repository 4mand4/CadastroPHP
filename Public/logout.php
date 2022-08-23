<?php
// PÁGINA PARA FAZER O LOGOUT

#Iniciar sessão para trazer as variáveis que foram criadas
if(!isset($_SESSION)){
    session_start();
}
# Destroi a sessão
session_destroy();
# Volta para a página index
header("Location: login.php"); 
?>