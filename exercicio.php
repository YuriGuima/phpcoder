<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>PHP Coder - Exercício</title>
</head>
<body class="exercicio">
    
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>

    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="green">Sem formatação</a>
        <a href="index.php" class="darkred">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            
            <?php
                include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>    
        
        </div>
    </main>

    <footer class="rodape">
        COD3R <?= date('Y'); ?>
    </footer>
    
</body>