<?php
//include "quemsomos.php";
require "../BancodeDados/dadosquemsomos.php";
 //echo "<pre>";
 //print_r($alunos);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Brasileiras</title>
	<link rel="stylesheet" type="text/css" href="../css/quemsomos.css">
</head>
<body>

<h2 >Quem somos?</h2>

<h5> As Brasileiras é uma empresa quase centenária e online que está no coração e no dia a dia dos Brasileiros.
Afinal, quem nunca deu aquela passadinha na loja antes de ir ao cinema para comprar guloseimas, 
foi de ultima hora comprar um presente ou aproveitou uma promoção imperdível?
Atualmente, nós empregamos mais de 50 mil pessoas direta e indiretamente,
e temos um compromisso social forte de levar produtos acessíveis aos nossos de clientes.</h5>

</body>

<body>
    <header>
        <h1>Lojas Brasileiras</h1>
    </header>
	<div class="container">
		<?php  foreach ($alunos as $i => $a) {?>
		
		<div class="card">
            <a href="../BancodeDados/dadosquemsomos.php?i=<?=$i?>">
			    <img src="<?=$a["foto"]?>" alt="<?=$a["nome"]?>">
            </a>
			<h3><a href="../BancodeDados/dadosquemsomos.php?i=<?=$i?>">
                <?=$a["nome"]?>
            </a></h3>
		</div>
        <?php         } ?>
			
		
	</div>
</body>


</html>