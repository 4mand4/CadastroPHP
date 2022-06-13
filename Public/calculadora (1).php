<?php
    // PÁGINA PARA CALCULADORA
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <!--Incluir header -->
    <?php include 'header.php'; ?>
    
    <!-- Formulário para a calculadora -->
    <br>
    <br>
        <form action="#" method="GET" class="text-center">
            <h2 class="text-center">CALCULADORA BÁSICA</h2>
            <label for='operacoes'>Escolha uma operação: </label>
            <br>
            <input name='n1' type='number'/>
            <select name='operacao' id='operacao'>
                <option value='1'>+</option>
                <option value='2'>-</option>
                <option value='3'>*</option>
                <option value='4'>/</option>
            </select>
            <input name='n2' type='number'/>
            <input name='sum' type='submit' value='Calcular' class='btn btn-dark'/>  
        </form>

<?php 
# Classe com os métodos da calculadora
class Calculadora{

    public $n1;
    public $n2;

    public function somar($n1, $n2){
       return $n1 + $n2;
    }
    public function subtrair($n1, $n2){
        return $n1 - $n2;
    }
    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
    public function dividir($n1, $n2){
        return $n1 / $n2;
    }
}

# Condição para que o formulário responda na mesma página
# sem dar erro por não ter sido declarado ainda.
# se o GET não estiver vazio, pegar como parâmetro e realizar os cálculos

    if(!empty($_GET && $_SERVER['REQUEST_METHOD'] == 'GET')){
        # Pegar os parâmetros do formulário
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $op = $_GET['operacao'];
        $res =  0;
        
        # Instancia a classe Operacao
        $calc = new Calculadora();
        $calc->n1 = $n1;
        $calc->n2 = $n2;


        # Switch Case para realizar as operações de acordo com a operação requisitada no formulário select
        switch($op){
            case 1:
                $res = $calc->somar($n1, $n2);
                
                break;
            case 2:
                $res = $calc->subtrair($n1, $n2);
                
                break;
            case 3:
                $res = $calc->multiplicar($n1, $n2);
                
                break;
            case 4:
                $res = $calc->dividir($n1, $n2);
                
                break;
        }

     #Exibe o resultado 
     echo '<br>'; 
     echo '<h3 class="alert alert-primary text-center">' . 'Resultado: ' . $res; '</h3>'; 
}
?>
</body>
</html>