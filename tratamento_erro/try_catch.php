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

// class Teste extends Exception { Daqui pra baixo não tem nada a ver com o curso

//     public function __construct($val){
//         parent::__construct($val);
//     }

// }

// try{
//     if(2>1){
//         throw new Teste('Erro!');
//     }
// }catch(Teste $e){
//     echo 'Error found: '.$e->getMessage();
// }