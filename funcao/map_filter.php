<div class="titulo">Map e Filter<div>

<?php

$notas = array(1.2, 2.3, 3.4, 4.5);

// echo join(array_map(round,$notas),' - ');

array_map(function(){
    echo $notas[0];
},$notas);