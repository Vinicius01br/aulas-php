<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Exercicio02</h1>
    <hr>
    <?php
    $dados = [
    "nome"=>"Chaves",
    "senha"=> "123456",
    "idade"=> 25,
    "cidade"=>"México",
    "telefones"=> ["123456789", "987654321"],

    ];
    ?>

    <h3>Acesso a saída de dados</h3>

    <ol>

   <li> <p>O <?=$dados ['nome']?> tem anos de</p></li>
    <li><p> <?=$dados ['idade']?></p></li>
    <li>a senha de seu cartão é <p> <?=$dados ['senha']?></p></li>
    <li>e ele mora no <p> <?=$dados ['cidade']?></p></li>
    <li>e o numero de seu telefone é <p><?=$dados["telefones"][1]?></p></li>
    </ol>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>