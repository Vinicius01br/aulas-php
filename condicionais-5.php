<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Condicionais Refatorado</h1>
    <hr>
    <h2>Simples (não tem o <code>else</code>)</h2>
    <?php
    $numero = 50;
    if($numero <100){
        ?>  echo"<p> Condição é verdadeira/true!</p>";
    <?php
    }
    ?>
    <hr>
    <h2>Composta (usa <code>if/else</code>)</h2>
    
    <?php

    $produto = "Ultrabook";
    $qtdEmEstoque = 0;
    $qtdCritica = 2;
    ?>
    <h3>Produto: <?=$produto?></h3>
    <h3>Estoque: <?=$qtdEmEstoque?></h3>

    <?php
    

    

    if( $qtdEmEstoque < $qtdCritica){
        echo "<p class=\"alert alert-danger\"> É necessario repor</p>";

        if($qtdEmEstoque == 0){
            echo "<p class=\"alert alert-warning\">AGORA</p>";

        }

    }else{
        
        echo "<p class=\"alert alert-success\"> Estoque normal</p>";
    }
    ?>
    <hr>
    <h2>Encadeada (usa <code> if, else, elseif</code>)</h2>
    <?php
    if($produto == "Ultrabook"){
        $garantia = 5;
    } elseif($produto == "Geladeira"){
        $garantia = 3;
    } elseif($produto =="TV"){
        $garantia = 2;
    } else{
        $garantia = 1;
    }

    
    ?>
    <p>O Produto <?=$produto?> tem garantia de
    <span class="badge text-bg-primary"><?=$garantia?></span>
    anos<?php if($garantia > 1) echo "s"?></p>

    <hr>
    <h2>Condicional com <code>switch/case</code></h2>
    <p><i>Estrutura alternativa para Condicional encadeada</i></p>

    <?php
    switch($produto){
        case"Ultrabook":$garantiaB = 5; break;
        case"Geladeira":$garantiaB = 3; break;
        case"TV":$garantiaB = 2; break;
        default:$garantiaB = 1; break;
    };
    ?>
    <p>Garantia B: <?=$garantiaB?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>