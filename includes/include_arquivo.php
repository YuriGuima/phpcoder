<?php
// echo 'Carregando: include_arquivo<br>';

$variavel = 'Carregamento concluído';

if(!function_exists('soma')){
    function soma($a, $b){
        return $a + $b;
    }
}