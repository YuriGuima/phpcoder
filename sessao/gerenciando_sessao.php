<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
echo 'Session ID: '.session_id().'<br>';

$contador = &$_SESSION['contador'];

$contador = $contador ? $contador+1 : 1;
echo $contador;

if($contador%5 === 0){
    session_regenerate_id();
}elseif($contador>=15){
    session_destroy();
}