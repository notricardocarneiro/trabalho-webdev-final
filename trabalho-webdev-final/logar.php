<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="img/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <img class="logo" src="img/assets/logo13.png" alt="logo">
            <a class="cabecalho__menu__link" href="index.html">Home</a>
            <a class="cabecalho__menu__link" href="sobre.html">Sobre</a>
            <a class="cabecalho__menu__link" href="servicos.html">Serviços</a>
            <a class="cabecalho__menu__link" href="faleconosco.php">Fale Conosco</a>
        </nav>
    </header>
    <main class="apresentacao">
        <section class="apresentacao__conteudo">
            <h1 class="apresentacao__conteudo__titulo"><span>Login</span></h1>
                <form action="banco/login.php" method="POST">
                    <label for="usuario" class="apresentacao__conteudo__texto">Nome de Usuário<br></label>
                    <input class="form" type="text" id="usuario" name="usuario" required><br>
                    <label for="senha" class="apresentacao__conteudo__texto">Senha</label><br>
                    <input class="form" type="password" id="senha" name="senha" required>                    
                    <br>
                    <p>*Fazer o login para contratar um serviço em Fale Conosco.</p>
                    <br>
                    <input class="apresentacao__links__navegacao__form" type="submit" name="submit" value="Logar">
                </form>
        </section>
        <img class="apresentacao__imagem" src="img/assets/loginimg.png" alt="Minha foto">
    </main>
    <footer class="rodape">
        <a href="https://www.instagram.com/notricardocarneiro/" target="_blank" rel="external"><img src="img/assets/instagramyellow.png" alt="Instagram"></a>
        <p>Desenvolvido por <span>Ricardo Carneiro</span></p>
        <a href="https://github.com/notricardocarneiro" target="_blank" rel="external"><img src="img/assets/githubyellow.png" alt=""></a>
    </footer>    
</body>
</html>