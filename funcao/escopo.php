<div class="titulo">Escopo<div>

<?php

function printarMensagem($mensagem){
    echo $mensagem;
}

function retornarMensagem($mensagem){
    return $mensagem.' Function Too!!!';
}

echo '<hr>';
printarMensagem('Hello Function!!!');
echo '<br>';
echo retornarMensagem('Hello');