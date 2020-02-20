<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="recursos/css/styles.css"> -->
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>PHP Coder</title>
</head>

<body>

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <?php
                require_once('menu.php');
            ?>
        </div>
    </main>

    <footer class="rodape">
        COD3R <?= date('Y'); ?>
    </footer>

</body>

</html>