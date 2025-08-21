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
        <h1>Sobre Nós</h1>
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
        <h2>Membros do Grupo</h2>
        <p>Eduardo Luiz Barros de Souza </br>
			Vitor Henrique de Oliveira </br>
			Vinicius Yuri Malta Melão</p>
        <h3>Funções e Estruturas Utilizadas</h3>
        <p> Neste projeto, foram utilizadas diversas funções e estruturas aprendidas em aula.
			</br></br>Nas páginas de compras dos ingressos, foram utilizados formulários para que o usuário pudesse selecionar a quantidade de ingressos, tipo de ingresso e extras. Em seguida, ele é redirecionado para a página de compra onde, com estruturas de PHP Switch Case, IF e Isset, é possível demonstrar ao usuário o resumo da compra realizada.
			</br></br>Há também um formulário de 'Contato' que permite ao usuário enviar mensagens e verificar o envio.
			</br></br>Durante todas as compras, o sistema grava os dados do usuário na sessão. Ao acessar a aba de 'Carrinho', é possível verificar todas as compras realizadas durante a navegação no site.</p>
    </main>
    <footer>
    </footer>
</body>
</html>