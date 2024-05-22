<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->

<?php

// Verifica se o formulário foi enviado via POST

    // Recebe os dados do formulário
    $produto = $_POST['produto'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    // Formata o preço em reais
    $precoFormatado = number_format($preco, 2, ',', '.');

    // Exibe os dados recebidos
    echo "<p><b>Produto:</b> $produto</p>";
    echo "<p><b>Fabricante:</b> $fabricante</p>";
    echo "<p><b>Preço:</b> R$ $precoFormatado</p>";
    echo "<p><b>Descrição:</b> $descricao</p>"

?>
</body>
</html>