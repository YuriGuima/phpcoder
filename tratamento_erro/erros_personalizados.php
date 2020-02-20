<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        echo "<br>Erro personalizado: $message";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new FaixaEtariaException('Muito longe ainda!');
    } elseif($idade > 70) {
        throw new FaixaEtariaException('Ja deveria estar aposentado!');
    }
    return 70 - $idade;
}

$idadeAvaliadas = array(15,35,63,82);

foreach ($idadeAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "<br>Idade: $idade, restam $tempoRestante anos para aposentar.";
    } catch(FaixaEtariaException $e) {
        echo "<br>Motivo: {$e->getMessage()}";
    }
}