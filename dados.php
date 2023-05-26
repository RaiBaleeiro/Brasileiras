<?php
require "quemsomos.php";
//caso o indice i não tenha sido passado atraves do metodo get execute esse codigo 
if(!isset($_GET["i"])){
//redireciono para o arquivo index.php
    header("location: quemsomoss.php");
die; //mato a aplicação e finalizo ela neste ponto
}

$i = $_GET["i"];
//se existe o indice i no array de funcionarios a variavel f sera criada com este valor.
if(isset($alunos[$i])){
   $a = $alunos[$i];
}






//echo"<pre>";
//print_r($alunos[$i]);
//echo "</pre>";

//die; //mata a aplicação e paralisa sua execução neste ponto.
?>


<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
	<link rel="stylesheet" type="text/css" href="quemsomos.css">
</head>
<body>
    <header>
        <h1>Quem somos:</h1>
    </header>
	<div class="container-detalhe">
		
		
		<div class="card">
            <?php if(isset($a)){ ?>

			<img src="<?=$a["foto"]?>" alt="<?=$a["nome"]?>">
			<h3><?=$a["nome"]?></h3>
			<h4><?=$a["cargo"]?></h4>
			<p><?=$a["descrição"]?>. </p>

            <?php 
            }else{
                echo"<h3>Funcionario Nao encontrado</h3>";
            }
            ?>

			<a href="index.php" class="link">Voltar</a>
		</div>
			
		
	</div>
</body>
</html>