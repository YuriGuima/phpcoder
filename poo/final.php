<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {

    public abstract function metodo1();

    public final function metodo2(){
        echo "I will not change!<br>";
    }

}

class FilhaAbstrata extends Abstrata {

    public function metodo1() {
        echo "I change...<br>";
    }
    
    // public function metodo2() {
    //     echo "Extendendo método 2<br>";
    // }

}

$classe = new FilhaAbstrata();
$classe->metodo1();
$classe->metodo2();