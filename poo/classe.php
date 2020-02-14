<div class="titulo">Primeira Classe<div>

<?php

class Cliente {

    //Atributo
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar(){
        echo "<hr>Nome: {$this->nome}<br>Idade: {$this->idade}";
    }

}

$person1 = new Cliente();
$person1->nome = 'Darth Vader';
$person1->idade = 38;
$person1->apresentar();

$person2 = new Cliente;
$person2->nome = 'Luke Skywalker';
$person2->idade = 20;
$person2->apresentar();