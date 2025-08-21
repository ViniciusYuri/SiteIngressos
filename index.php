<?php
session_start();
$_SESSION['user'] = 'Guest';
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
        <h1>Bem-vindo ao Site Ingressos</h1>
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
	<h2>Principais Eventos</h2>
        <p>Encontre aqui os melhores ingressos para os eventos mais esperados!</p>
<div class="carousel">
	<input type="radio" name="carousel" id="slide1" checked>
	<input type="radio" name="carousel" id="slide2">
	<input type="radio" name="carousel" id="slide3">
	<div class="slides">
		<div class="slide">
			<a href="conteudo1.php"><img src="image1.jpg" alt="Slide 1"></a>
		</div>
		<div class="slide">
			<a href="conteudo2.php"><img src="image2.jpg" alt="Slide 2"></a>
		</div>
		<div class="slide">
			<a href="conteudo3.php"><img src="image3.jpg" alt="Slide 3"></a>
		</div>
	</div>
	<div class="navigation">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
	</div>
</div>
    </main>
    <footer>
    </footer>
</body>
</html>