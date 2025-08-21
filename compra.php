<?php
session_start();
error_reporting(0);

$tipo_ingresso = $_POST['tipo_ingresso'];
$extras = [];
$preco_base = 0;

switch ($tipo_ingresso) {
    case 'Pista Premium':
        $preco_base = 150;
        break;
    case 'Pista':
        $preco_base = 100;
        break;
    case 'Cadeira':
        $preco_base = 50;
        break;
}

if (isset($_POST['mg'])) {
    $extras[] = 'Meet and Greet';
    $preco_base += 1000;
}
if (isset($_POST['kf'])) {
    $extras[] = 'Kit fã';
    $preco_base += 100;
}
if (isset($_POST['ob'])) {
    $extras[] = 'Open bar';
    $preco_base += 150;
}

$quantidade = $_POST['numero'];
$valor_total = $preco_base * $quantidade;

// Adicionar compra ao carrinho na sessão
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

$_SESSION['carrinho'][] = [
    'tipo_ingresso' => $tipo_ingresso,
    'extras' => $extras,
    'quantidade' => $quantidade,
    'valor_total' => $valor_total
];
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
        <h1>Detalhes da Compra</h1>
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
        <h2>Detalhes da sua compra:</h2>
        <p><strong>Tipo de ingresso:</strong> <?php echo htmlspecialchars($tipo_ingresso); ?></p>
        <p><strong>Extras:</strong> <?php echo empty($extras) ? 'Nenhum' : implode(', ', $extras); ?></p>
        <p><strong>Quantidade:</strong> <?php echo htmlspecialchars($quantidade); ?></p>
        <p><strong>Valor Total:</strong> R$ <?php echo number_format($valor_total, 2, ',', '.'); ?></p>
        <p>Obrigado por comprar!</p>
    </main>
    <footer>
    </footer>
</body>
</html>