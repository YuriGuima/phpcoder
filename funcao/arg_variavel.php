<div class="titulo">Argumentos Variáveis<div>

<?php

function somaTotal(...$valores){
    $soma = 0;
    foreach($valores as $valor){
        $soma+=$valor;
    }

    return $soma;
}


function ordemDoImperio($imperador,$comandante,...$exercito){
    echo "<hr>Imperador: $imperador<br>Comandante: $comandante";

    echo '<ol>';
    foreach($exercito as $soldado){
        echo "<li>Soldado: $soldado</li>";
    }
    echo '</ol>';

}


echo '<hr>Com Números: '.somaTotal(1,2,3,4,5);
echo '<br>Com Arrays: '.somaTotal(...[1,2,3,4,5]);


$exercito = array('Stormtropper','Stormtropper','Stormtropper','Stormtropper');
echo ordemDoImperio('Palpatine','Dart Vader',...$exercito);