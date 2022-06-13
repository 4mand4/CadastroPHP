<?php

class Conta
{
    public $name;

    # Função de construtor que executa automaticamente quando instância um objeto
    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

}

class Assinatura extends Conta
{
    public $dataExp;
    public $valor;
    public $descricao;

    public function getValor()
    {
        return $this->valor;
    }

    public function getDataExp()
    {
        return $this->dataExp;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    
}

$basica = new Assinatura('Básica');
$basica->valor = 'R$10,00';
$basica->dataExp = '30 dias';
$basica->descricao = 'Conteúdo básico com direito a aulas semanalmente e materiais';

$padrao = new Assinatura('Padrão');
$padrao->valor = 'R$30,00';
$padrao->dataExp = '30 dias';
$padrao->descricao = 'Conteúdo com direito a aulas e a cursos com certificados';

$premium = new Assinatura('Premium');
$premium->name = 'Premium';
$premium->valor = 'R$100,00';
$premium->dataExp = '1 ano';
$premium->descricao = 'Cursos com certificados e acompanhamento de um instrutor';


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinaturas</title>
</head>

<body>
    <!--Incluir header -->
    <?php include 'header.php'; ?>
    <br>
    <br>
    <div id="team-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title text-center">ASSINATURAS</h3>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-header text-center"><h3><?= $basica->getName();?></h3></div>
                            <div class="card-body bg-light">
                            <p class="card-text text-center"><?= $basica->getDescricao();?></p>   
                            <h5 class="card-text text-center"><?= $basica->getValor();?></h5>
                            <h5 class="card-text text-center"><?= $basica->getDataExp();?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-info">
                        <div class="card-header text-center"><h3><?= $padrao->getName();?></h3></div>
                            <div class="card-body bg-info">
                            <p class="card-text text-center"><?= $padrao->getDescricao();?></p>    
                            <h5 class="card-text text-center"><?= $padrao->getValor();?></h5>
                            <h5 class="card-text text-center"><?= $padrao->getDataExp();?></h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-dark">
                        <div class="card-header text-center"><h3 style="color: white"><?= $premium->getName();?></h3></div>
                            <div class="card-body bg-dark">
                            <p class="card-text text-center" style="color: white"><?= $premium->getDescricao();?></p>    
                            <h5 class="card-text text-center" style="color: white"><?= $premium->getValor();?></h5>
                            <h5 class="card-text text-center" style="color: white"><?= $premium->getDataExp();?></h5>
                        </div>
                    </div>
                </div>
</body>

</html>