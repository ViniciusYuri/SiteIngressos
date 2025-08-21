<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site de ingressos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dados Enviados</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="conteudo1.php">Conteúdo 1</a></li>
                <li><a href="conteudo2.php">Conteúdo 2</a></li>
                <li><a href="conteudo3.php">Conteúdo 3</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Dados Recebidos:</h2>
        <p>Nome: <?php echo htmlspecialchars($_POST['nome']); ?></p>
        <p>Email: <?php echo htmlspecialchars($_POST['email']); ?></p>
        <p>Mensagem: <?php echo nl2br(htmlspecialchars($_POST['mensagem'])); ?></p>
        <p> <strong>Obrigado por entrar em contato!</p>
    </main>
    <footer>
    </footer>
</body>
</html>