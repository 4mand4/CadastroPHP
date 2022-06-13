<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
     <!--Incluir header -->
     <?php include 'header.php'; ?>
</head>
<body>
    <br>
    <br>
<form action="#" method="GET" class="text-center">
            <h2 class="text-center">CALCULAR O IMC</h2>
            <br>
            <input name='peso' type='text' placeholder="peso"/>
            <input name='altura' type='text' placeholder="altura"/>
            <input name='calcular' type='submit' value='Calcular' class='btn btn-dark'/>  
        </form>
<br>
<?php
# Condição para que o formulário responda na mesma página
# sem dar erro por não ter sido declarado ainda.
# se o GET não estiver vazio, pegar como parâmetro e realizar os cálculos
if(isset($_GET['peso']) && $_GET['altura'])
{ 
    $peso = $_GET['peso'];

    # Eleva a altura ao quadrado
    $altura = pow($_GET['altura'], 2);

    # Cálculo do peso divido pela altura
    $calculo = $peso/$altura;

    // verificando e passando mensagem para o resultado do IMC
		if($calculo <= 17)
        {
			echo '<h3 class="alert alert-warning text-center">Abaixo de 17 - Muito abaixo do peso</h3>';
        }
        else if($calculo > 17 && $calculo <= 18.49)
        {
            echo '<h3 class="alert alert-warning text-center">Entre 17 e 18,49 - Abaixo do peso</h3>';
        }
		else if($calculo >= 18.5 && $calculo <= 24.99)
        {
            echo '<h3 class="alert alert-success text-center">Entre 18,5 e 24,99 - Peso normal</h3>';	
        }				
		else if($calculo >= 25 && $calculo <= 29.99)
        {
            echo '<h3 class="alert alert-danger text-center">Entre 25 e 29,99 - Acima do peso</h3>';
        }
		else if($calculo >= 30)
        {
			echo '<h3 class="alert alert-danger text-center">Entre 30 e 34,99 - Obesidade I</h3>';
        }
}
?>
</body>
</html>