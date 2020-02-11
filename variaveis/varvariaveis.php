<div class="titulo">Variáveis Variáveis</div>

<?php
$val = 'homo';
$$val = 'sapiens';

echo strtoupper($val.$homo);

$a = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "<br> $a {$$a} {$$$a} {$$$$a} {$$$$$a}.";