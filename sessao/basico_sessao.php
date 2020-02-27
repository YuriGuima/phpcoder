<div class="titulo">Básico Sessão</div>

<?php
session_start();

echo 'Antes: ';
print_r($_SESSION);

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Vader';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'vader@sith.com';
}

echo '<hr>Depois: ';
print_r($_SESSION);

?>

<p><a href="exercicio.php?dir=sessao&file=basico_alterar_sessao">Alterar Sessão</a><p>
<!-- <p><a href="sessao/basico_alterar_sessao.php">Alterar Sessão</a><p> -->