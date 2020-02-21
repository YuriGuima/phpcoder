<?php

session_start();
print_r($_SESSION);

?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<?php

$_SESSION['nome'] = 'Anakin';
$_SESSION['email'] = 'anakin@jedi.com';

print_r($_SESSION);
?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao">Voltar</a>
</p>
<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar Sessão</a>
</p>