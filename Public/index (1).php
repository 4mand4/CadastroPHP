<?php
# Criação de uma array para exibir os nomes dos produtos
$vetor = ["MATEMÁTICA", "QUÍMICA", "BIOLOGIA", "INGLÊS"];
# Criação de uma array para exibir as imagens
$img = ["../img/mat.jpg", "../img/quimica.jpg", "../img/biologia.jpg","../img/ingles.png"]
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <!--Incluir header -->
    <?php include 'header.php'; ?>
    <br>
    <div id="team-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <br>
                    <br>
                </div>
                <!-- Laço for para exibir o texto do vetor criando cards -->
                <?php for($i=0; $i<4; $i++){?>
                <div class="col-md-3">
                    <div class="card bg-dark">
                        <img src="<?= $img[$i]?>" class="card-img-top" alt="Imagem">
                        <div class="card-body bg-dark">
                            <h5 class="card-title text-center" style="color: white"><?= $vetor[$i]?></h5>
                        </div>
                    </div>
                </div>
                <?php }?>
</body>

</html>