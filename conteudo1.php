<?php
session_start();
error_reporting(0);
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
        <h1>Bring Me the Horizon</h1>
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
        <div style="text-align: center;">
			<img src="image1.jpg" alt="Foto da banda" height="300px">
			<p style="font-size: 12px; color: #555;">Fonte: Google Imagens</p>
		</div>
		<p>A ansiedade só aumenta para os fãs brasileiros do Bring Me The Horizon! A banda britânica, conhecida por sua sonoridade potente e shows explosivos, está prestes a desembarcar em terras tupiniquins para uma apresentação que promete ser inesquecível. Com um repertório que abrange desde os clássicos que marcaram gerações até as novas músicas que exploram sonoridades mais experimentais, o show do BMTH promete saciar a sede dos fãs por um bom mosh pit. A expectativa é que a banda entregue um show visualmente impactante, com efeitos especiais e uma energia contagiante que irá vibrar cada canto do local do evento.</p>
		<form action="compra.php" method="post">
			<?php echo "Qual ingresso deseja comprar? </br></br>" ?> 
            <input type="radio" name="tipo_ingresso" value="Pista Premium"/>Pista Premium (R$150)
            <input type="radio" name="tipo_ingresso" value="Pista"/>Pista (R$100)
            <input type="radio" name="tipo_ingresso" value="Cadeira"/>Cadeira (R$50)
			</br> </br>
			<?php echo "Deseja adicionar algum extra? </br></br>" ?>
			<input type="checkbox" name='mg' value="mg"/>Meet and Greet (R$1000) </br>
			<input type="checkbox" name='kf' value="kf"/>Kit fã (R$100) </br>
			<input type="checkbox" name='ob' value="ob"/>Open bar (R$150)
			</br></br>
			<?php echo "Quantos ingressos deseja comprar?</br>";?>
			<input type="number" name='numero' value="numero"/>
			</br></br>
			<button type="submit">Finalizar compra</button>
	</main>
    <footer>
    </footer>
</body>
</html>