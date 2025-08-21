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
        <h1>Contato</h1>
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
		<p>Conta pra gente quais shows você gostaria de ver! 
			</br>Se quiser deixar sua mensagem com o que podemos melhorar para que sua experiência seja a melhor de todas.
			</br>Fique a vontade!</p>
        <form action="envio.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"> </br> </br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"> </br> </br>
            <label for="mensagem">Mensagem:</label> </br>
            <textarea id="mensagem" name="mensagem"></textarea>	</br>
            <button type="submit">Enviar</button>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>