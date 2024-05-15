<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <div class="container" >
    <h1>Variaveis e Constantes</h1>
    <hr>
    <h2>Declaração e saída de dados usando <code>echo</code></h2>
    <?php
    //Variaveis
    $curso = "programador web";
    $ano = 2024;
    $area = "Back-end";


    //estamos no programador web em 2024.
    echo "<p> Estamos no $curso em $ano.</p>";
    echo '<p> Estamos no $curso em $ano.</p>';
    //Constantes
    define("AUTOR","Vinicius"); //tradicional, antiga
    const EMPRESA = "ABC Tecnologia";// nova, moderna

    //Tiago trabalha na empresa ABC Tecnologia.
    echo "<p>".AUTOR."trabalha na empresa".EMPRESA."</p>";
    
    ?>
    <hr>
    <h2>Saída de dados simplificada /direta</h2>
    <!--Estamos no programador Web em 2024.-->
    <p>Estamos no <?=$curso?> em <?=$ano?>.</p>
    <!--Tiago trabalha na empresa ABC Tecnologia -->
    <P><?=AUTOR?> trabalha na empresa <?=EMPRESA?></P>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>