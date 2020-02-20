<div class="titulo">Try/Catch</div>

<?php

try{
    // echo intdiv(10,0);
    throw new Exception('Erro');
} catch(Error $e) {
    echo 'Divisão por zero<br>';
} catch(throwable $e) {
    echo 'Erro encontrado: '.$e->getMessage().'<br>';
} finally {
    echo 'Sempre executado!';
}