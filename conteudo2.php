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
        <h1>Sleep Token</h1>
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
			<img src="image2.jpg" alt="Foto da banda" height="300px">
			<p style="font-size: 12px; color: #555;">Fonte: Google Imagens</p>
		</div>
        <p>A expectativa para o show do Sleep Token no Brasil está no auge! A banda britânica, conhecida por sua sonoridade atmosférica e enigmática, promete uma experiência única para os fãs. Com máscaras cobrindo seus rostos e uma identidade visual marcante, o Sleep Token cria um clima de mistério e intriga que se transfere diretamente para seus shows. A banda, que vem conquistando cada vez mais fãs no mundo todo, promete um show repleto de emoções intensas e uma atmosfera envolvente. Os fãs brasileiros já podem se preparar para uma jornada sonora inesquecível, onde o metal se encontra com elementos eletrônicos e experimentais. A pergunta que fica no ar é: o que o Sleep Token reserva para o público brasileiro?</p>
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