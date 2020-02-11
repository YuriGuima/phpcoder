<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/styles.css">
    <title>PHP Coder</title>
</head>

<body>

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo green">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=hello">Hello World!!!</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">Integração HTML</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo cadet">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">Integer</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">Float</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=boolean">Boolean</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversao">Conversões</a>
                        </li>
                    </ul>
                </div>

                <div class="modulo blue">
                    <h3>Módulo 02 - Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">Básico</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=varvariaveis">Varia.Variaveis</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </main>

    <footer class="rodape">
        COD3R <?= date('Y'); ?>
    </footer>

</body>

</html>