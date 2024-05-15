<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>
<body>
    <h1>Arrays PHP</h1>
    <hr>
<!-- Declarando arrays-->

    <?php

    $bandas = ["Rush", "Slayer", "Nightwish"];
    $cursos = array("HTML5", "PHP","DESIGN", "JS");

    define("UNIDADE_SESC", ["BELENZINHO","Bertioga"]);
    const UNIDADE_SENAC = ["penha", "são miguel","itaquera"];
    ?>
    <h3>Acesso e saída de dados</h3>
    <p>Curto a banda <?=$bandas[1]?></p>
    <p>Já estudei <?=$cursos[3]?></p>
    <p>Gostaria de conhecer o Sesc <?=UNIDADE_SESC[0]?></p>
    <p>Estamos no Senac  <?=UNIDADE_SENAC[0]?></p>
    <hr>
    <h2>Arrays associativos</h2>
    <?php
    $filme = [
        //Chave associativa
        "titulo" =>"Deadpool",
        "ano" => 2016,
        "genero" => "ação",
        "personagens" => ["Wade Wilson", "Fanático"]
    ];

    $livro = array(
        "tiulo"=>"Senhor dos anéis",
        "autor"=> "Toiken",
    );
    ?>
    <h3>Acesso a saída de dados</h3>
    <P> O Filme
    <p>O Filme <?=$filme ["titulo"]?> foi lançadoo</p>
    <p>O Filme <?=$filme ['ano']?></p>
    </p>
    <p> <?$livro ['titulo']?> é um ótimo livro. </p>
    <hr>
    <h2>Comandos úteis para análise/depuração de arrays</h2>
    <h3><code>print_r</code> e <code>var_dump</code></h3>
    <pre><?=print_r($bandas)?></pre>
    
    <pre><?=var_dump($bandas)?></pre>
</body>
</html>