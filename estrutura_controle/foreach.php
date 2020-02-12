<div class="titulo">Foreach<div>

<?php

$semana = array('Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado');

echo "<hr>";

foreach($semana as $indice => $dia){
    echo "$indice - $dia<br>";
}

// echo join($semana,' | ');