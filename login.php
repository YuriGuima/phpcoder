<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']){
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123456",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@email.com.br",
            "senha" => "654321",
        ],
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['errors'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            header('Location: index.php');
        }
    }

    if(!$_SESSION['usuario']) {
        $_SESSION['errors'] = ['Usuário/Senha inválido'];
    }
}

?>

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
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>PHP Coder</title>
</head>

<body class="login">

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Welcome!</h2>
    </header>
        
    </nav>

    <main class="principal">
        <div class="conteudo">
            <h3>Login</h3>

            <?php if($_SESSION['errors']): ?>
                <div class="errors">
                    <?php foreach ($_SESSION['errors'] as $error):?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            <!-- form[action="#"][method="post"]>div>label[for="email"]>{E-mail}^input[type="email"][name="email"]#email^div>label[for="senha"]>{Senha}^input[type="password"][name="senha"]#senha -->
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>

        </div>
    </main>

    <footer class="rodape">
        COD3R <?= date('Y'); ?>
    </footer>

</body>

</html>