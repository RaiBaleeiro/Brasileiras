<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

    <div class="superior">
        <div class="alto">
            <div class="icon">
                <img src="../imagens/face.png">
            </div>
            <h2>login do cliente</h2>
        </div>

        <div class="baixo">
            <p>Bem vindo(a), preencha o formulário, informando o email e senha da sua conta, e tenha um atendimento personalizado</p>
        </div>
    </div>

    <div class="form">
        <div class="preencher">
            <form action="pagina-de-resultado.php" method="POST">
                <label>
                    <div class="email">
                        <p>e-mail*</p>
                        <input type="search">
                    </div>
                    
                    <div class="senha">
                        <p>senha*</p>
                        <input type="search">
                    </div>
                    
                </label>
            </form>
        </div>
        <a href="index.php">
            <div class="botao">
            <p>continuar</p>
            </div>
        </a>
        
    </div>

	
</body>
</html>