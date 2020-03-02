<div class="titulo">Escrevendo Arquivo<div>

<?php
$arquivo = fopen('teste.txt','w');
fwrite($arquivo,"Initial value\n");
$str = "Second line\n";
fwrite($arquivo,$str);
fclose($arquivo);

$arquivo = fopen('teste.txt','w');
fwrite($arquivo,"New content");
fclose($arquivo);

$arquivo = fopen('teste.txt','a');
fwrite($arquivo," with new values\n");
fwrite($arquivo,"Adding in a second moment\n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt','x');
// fwrite($arquivo,"New archive");
// fclose($arquivo);
