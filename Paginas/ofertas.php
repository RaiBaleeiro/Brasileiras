<?php
	require '../BancodeDados/dados-ofertas.php';

	if (!isset($_GET['i'])){
		header('location: index.php');
		die;
	}


	$i = $_GET['i'];
	$v = $ofertas[$i];
	

	//echo '<pre>';
	//print_r($f);
	//echo '</pre>';
	//die;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Produtos</title>
	<link rel="stylesheet" href="../css/produto.css">
</head>
<body>
	<div class="topo">
		<div class="alto">
			<div class="superior">	
				<a href="index.php">
					<img src="../imagens/logo4.png" alt="Descrição da Imagem" class="logo">
				</a>

				<form action="pagina-de-resultado.php" method="GET">
					<label>
						<input type="search" name="pesquisa" class="pesquisa" placeholder="Busque aqui seu produto">
					</label>
				</form>
									

				<a href="login.php" class="link-login">
					<div class="usuario">
						<img src="../imagens/usuario.png" alt="Descrição da Imagem" class="icon">
						<div class="login">
							<p>Bem vindo(a), faça seu login ou cadastre-se</p>
						</div>
					</div>
				</a>
								
				<div class="icons">
                    <img src="../imagens/9025703_heart_icon.png" class="icon2">
                    <img src="../imagens/9025885_shopping_cart_icon.png" class="icon3">
					
				</div>
			</div>
		</div>
	</div>



	<div class="foto">
		<div>
			<img src="<?=$v['foto']?>" alt="<?=$v['nome']?>">
		</div>
	</div>

	
	<div class="texto">
			<p class="loja">Lojas Brasileiras</p>
			<div>
				<h1><?=$v['nome']?></h1>
			</div>
			

				<h4>Valor: <?=$v['preco']?></h4>
				<p class="q">Quantidade</p>

				<div>
					<input class="quanti" type="number" data-min="1" min="1" step="1" value="1" max="null">
				</div>

						<button type="submit" class="add">
							<span>Adicionar ao carrinho</span>
						</button>

					
						<button type="button" class="pag">
							<span>Compre já</span>
						</button>
					
					


				<div class="card">
					<p class="des"><?=$v['descricao']?></p>
				</div>
			
					
				</div>
			
		
	
</body>
</html>