<?php
    include '../BancodeDados/dados-eletrodomesticos.php';
    include '../BancodeDados/dado-iphone.php';
    include '../BancodeDados/dados-ofertas.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <header class="topo">

        <div class="alto">

            <div class="superior">
                        
                    
                        <img src="../imagens/logo.png" class="logo">

                        <form action="pagina-de-resultado.php" method="GET">
                        <label>
                        <input type="search" name="pesquisa" class="pesquisa" placeholder="Busque aqui seu produto">
                        </label>
                        </form>
                        

                    <a href="login.php" class="link-login">
                        <div class="usuario">
                            <img src="../imagens/Frame.png" class="icon">
                            <div class="login">
                                <p>Bem vindo(a), faça seu login ou cadastre-se</p>
                            </div>
                        </div>
                    </a>
                    
                    
                    <div class="icons">
                        <img src="../imagens/coracao.png" alt="Descrição da Imagem" class="icon2">
                        <img src="../imagens/carrinho.png" alt="Descrição da Imagem" class="icon3">
        
                    </div>
            </div>

            <div class="inferior">
                <ul class="lista2">
                    <li class="list__container">Baixe o app</li>   
    	            <li class="list__container">Termos</li>
    	            <li class="list__container">Consulte o frete</li>       
                    <li class="list__container">Cartão da loja</li>
    	            <li class="list__container">Redes sociais</li>
                    <li class="list__container">SAC</li><a href="quemsomos.php">
                    <li class="list__container">Quem somos</li>
	            </ul>
            </div>
        <a>
            
        </div>

        <nav class="baixo">
            <ul class="lista">
                <li class="list__container">Eletrodomésticos</li>
                <li class="list__container">Móveis</li>
                <li class="list__container">Decoração</li>
                <li class="list__container">Eletroportáteis</li>
                <li class="list__container">Games</li>
                <li class="list__container">Smartphones</li>
                <li class="list__container">Livros</li>
                <li class="list__container">Papelaria</li>
            </ul>
        </nav>

    </header>
    
    <session class="cards">

        <div class="box1 box__container">
        
            <img src="../imagens/porcentagem.png" alt="Descrição da Imagem" class="imbox">

            <div class="texbox">
                <h3>10% DE DESCONTO</h3>
                <p>para pagamentos à vista</p>
            </div>
            
        </div>

        <div class="box2 box__container">
            <img src="../imagens/cartao2.png" alt="Descrição da Imagem" class="imbox">
            
            <div class="texbox">
                <h3>ATÉ 6x SEM JUROS</h3>
                <p>no cartão de crédito</p>
            </div>
            
        </div>

        <div class="box3 box__container">
            <img src="../imagens/caminhao.png" alt="Descrição da Imagem" class="imbox">
            
            <div class="texbox">
                <h3>FRETE GRÁTIS</h3>
                <p>compras acima de R$ 99,99</p>
            </div>
            
        </div>

        <div class="box4 box__container">
            <img src="../imagens/cadeado2.png" alt="Descrição da Imagem" class="imbox">
            
            <div class="texbox">
                <h3>COMPRA SEGURA</h3>
                <p>com dados pictografados</p>
            </div>
            
        </div>
    </session>   


        <div class="lancamento">
        <?php 
                foreach($iphone as $i => $f) {
        ?>
                <a href="pagina-iphone.php?i=<?=$i?>">
                <img src="../imagens/poster2.jpeg" alt="Descrição da Imagem">
            </a>

                <?php } ?>

            
            
        </div>

        <session class="mais">
            <h2>produtos mais vendidos</h2>
            <?php 
                foreach ($ofertas as $i => $v) {
            ?>
                <a href="ofertas.php?i=<?=$i?>">
                    <div class="produto">

                        <img src="<?=$v["foto"]?>" alt="<?=$v["nome"]?>">

                        <h3 class=titulo>
                            <?=$v["nome"]?>
                        </h3>
                        
                        <h4><?=$v["preco"]?></h4>
                    </div>
                </a>

                <?php } ?>
        </session>

        <section class="container">
            <h2>Eletrodomésticos</h2>
            <?php 
                foreach($produtos as $i => $p) {
            ?>
                <a href="produto.php?i=<?=$i?>">
                    <div class="card">

                        <img src="<?=$p["foto"]?>" alt="<?=$p["nome"]?>">

                        <h3>
                            <?=$p["nome"]?>
                        </h3>
                        
                        <h4 class="preco"><?=$p["preco"]?></h4>
                    </div>
                </a>

                <?php } ?>
        </section>
           
        <footer class="sub">

        </footer>
    
</body>
</html>