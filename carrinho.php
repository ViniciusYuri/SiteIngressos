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
        <h1>Seu Carrinho</h1>
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
        <h2>Itens comprados:</h2>
        <?php if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])): ?>
            <ul>
                <?php foreach ($_SESSION['carrinho'] as $index => $item): ?>
                    <li>
                        <strong>Tipo de ingresso:</strong> <?php echo htmlspecialchars($item['tipo_ingresso']); ?><br>
                        <strong>Extras:</strong> <?php echo empty($item['extras']) ? 'Nenhum' : implode(', ', $item['extras']); ?><br>
                        <strong>Quantidade:</strong> <?php echo htmlspecialchars($item['quantidade']); ?><br>
                        <strong>Valor Total:</strong> R$ <?php echo number_format($item['valor_total'], 2, ',', '.'); ?><br>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Seu carrinho está vazio.</p>
        <?php endif; ?>
    </main>
    <footer>
    </footer>
</body>
</html>