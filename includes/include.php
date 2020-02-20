<div class="titulo">Include</div>

<?php
echo 'Hello World!<br>';
include('include_arquivo.php');
include('include_arquivo.php'); // Pode incluuir mais de uma vez, mas não tem prq;

echo soma(20,3);
echo "<br>Variavel do include: $variavel";
