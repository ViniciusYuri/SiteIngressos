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
        <h1>Spiritbox</h1>
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
			<img src="image3.jpg" alt="Foto da banda" height="300px">
			<p style="font-size: 12px; color: #555;">Fonte: Google Imagens</p>
		</div>
        <p>A ansiedade toma conta dos fãs de metalcore no Brasil! A banda canadense Spiritbox, conhecida por sua sonoridade pesada e letras introspectivas, está prestes a sacudir o país com sua música visceral. Com uma mistura explosiva de metalcore, deathcore e elementos eletrônicos, a banda promete um show memorável, repleto de riffs poderosos, vocais marcantes e uma performance de palco que vai deixar qualquer um de queixo caído. Os fãs brasileiros já podem se preparar para uma experiência sonora única, onde a raiva e a beleza se encontram em perfeita harmonia. A expectativa é que o show do Spiritbox seja um dos eventos mais aguardados do ano para os amantes do metal extremo.</p>
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