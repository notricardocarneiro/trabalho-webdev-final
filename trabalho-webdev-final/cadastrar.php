<?php
    if(isset($_POST['submit']))
{
    /*print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Usuario: ' . $_POST['usuario']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']);*/

    include_once('banco/config.php');

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO tbusuario(nome, usuario, email, senha, texto) VALUES ('$nome', '$usuario', '$email', '$senha', '$texto')");
    header('Location: logar.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
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
            <h1 class="apresentacao__conteudo__titulo"><span>Cadastro</span></h1>
                <form action="cadastrar.php" method="POST">
                    <p class="apresentacao__conteudo__texto">Nome Completo<br></p>
                    <input class="form" type="text" id="nome" name="nome" required><br>
                    <p class="apresentacao__conteudo__texto">Nome de Usuário<br></p>
                    <input class="form" type="text" id="usuario" name="usuario" required><br>
                    <p class="apresentacao__conteudo__texto">Email<br></p>
                    <input class="form" type="email" id="email" name="email" required><br>
                    <p class="apresentacao__conteudo__texto">Senha</p>
                    <input class="form" type="password" id="senha" name="senha" required>                    
                    <br><br>
                    <input class="apresentacao__links__navegacao__form" type="submit" name="submit" value="Cadastrar" onclick="confirmarCadastro()">
                </form>
        </section>
        <img class="apresentacao__imagem" src="img/assets/cadastroimg.png" alt="Minha foto">
        <script>
            function confirmarCadastro() {
            // Obter valores do formulário
            var nome = document.getElementById('nome').value;
            var email = document.getElementById('email').value;
            var usuario = document.getElementById('usuario').value;
                if (nome && email && usuario) {
                // Exibir mensagem de confirmação usando alert
                var mensagem = "Cadastro confirmado para:\nNome: " + nome + "\nE-mail: " + email + "\nUsuario: " + usuario;
                alert(mensagem);
                } 
             }
        </script>
    </main>
    <footer class="rodape">
        <a href="https://www.instagram.com/notricardocarneiro/" target="_blank" rel="external"><img src="img/assets/instagramyellow.png" alt="Instagram"></a>
        <p>Desenvolvido por <span>Ricardo Carneiro</span></p>
        <a href="https://github.com/notricardocarneiro" target="_blank" rel="external"><img src="img/assets/githubyellow.png" alt=""></a>
    </footer>    
</body>
</html>