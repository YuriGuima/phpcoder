<div class="titulo">Interface<div>

<?php

interface Animal{
    function mover();
}

interface Aquatico extends Animal{
    function nadar();
}

class Tartaruga implements Aquatico {

    public function mover(){
        $this->nadar();
    }
    
    public function nadar(){
        echo '<br>Nadando...';
    }

}

$leonardo = new Tartaruga();
$leonardo->mover();