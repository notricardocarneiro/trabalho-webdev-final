<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        // Se o usuário não estiver autenticado, redirecione para a página de login
        header("Location: logar.php");
        exit();
    }

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bdusuarios';
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $usuario = $_SESSION['usuario'];

    $sql = "SELECT nome, email FROM tbusuario WHERE usuario = '$usuario'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        // Obtém os dados do usuário
        $dados_usuario = $resultado->fetch_assoc();
        $nome = $dados_usuario['nome'];
        $email = $dados_usuario['email'];
    } else {
        echo "Erro: Usuário não encontrado no banco de dados.";
        exit();
    }

    if (isset($_POST['logout'])) {
        // Destruir todas as variáveis de sessão
        session_unset();
        // Destruir a sessão
        session_destroy();
        // Redirecionar para a página de login 
        header("Location: logar.php");
        exit();
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fale Conosco</title>
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
            <h1 class="apresentacao__conteudo__titulo"><span>Fale Conosco</span></h1>
                <form action="faleconosco.php" method="POST">
                    <p class="apresentacao__conteudo__texto">Nome Completo<br></p>
                    <input class="form" type="text" id="nome" name="nome" value="<?php echo $nome; ?>" readonly><br>
                    <p class="apresentacao__conteudo__texto">Email<br></p>
                    <input class="form" type="email" id="email" name="email" value="<?php echo $email; ?>" readonly><br>
                    <p class="apresentacao__conteudo__texto">Mensagem</p>
                    <textarea placeholder="Digite sua mensagem aqui." class="txtarea" rows="0" name="texto" id="texto"></textarea>
                    <br><br>
                    <div class="botao__servicos">
                    <input class="apresentacao__links__navegacao__form" type="submit" name="enviar" value="Enviar">
                    <input class="apresentacao__links__navegacao__form" type="submit" name="logout" value="Logout">
                    </div>
                </form>
        </section>
        <img class="apresentacao__imagem" src="img/assets/faleyellow.png" alt="Minha foto">
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.querySelector("form");
                const enviarButton = document.querySelector("[name='enviar']");

                enviarButton.addEventListener("click", function (event) {
                    const mensagemTextarea = document.getElementById("texto").value;

                    if (mensagemTextarea.trim() === "") {
                        // Se o campo de mensagem estiver vazio, exibe um alerta
                        alert("Por favor, digite sua mensagem antes de enviar.");
                        event.preventDefault();
                    } else {
                        const servicoIndisponivel = true;

                        if (servicoIndisponivel) {
                            alert("Desculpe, o serviço de mensagem está indisponível no momento. Tente novamente mais tarde.");
                            event.preventDefault();
                        }
                    }
                });
            });
        </script>
    </main>
    <footer class="rodape">
        <a href="https://www.instagram.com/notricardocarneiro/" target="_blank" rel="external"><img src="img/assets/instagramyellow.png" alt="Instagram"></a>
        <p>Desenvolvido por <span>Ricardo Carneiro</span></p>
        <a href="https://github.com/notricardocarneiro" target="_blank" rel="external"><img src="img/assets/githubyellow.png" alt=""></a>
    </footer>    
</body>
</html>