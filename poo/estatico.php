<div class="titulo">Membros Estáticos<div>

<?php

class A{
    public $public = 'Público';
    protected $protected = 'Protegido';
    private $private = 'Privado';
    public static $estatico = 'Membro Estático';
    
    public function exibirPublicamente(){
        echo "Public: {$this->public} | Protected: {$this->protected} | Private: {$this->private}";
    }
    
    public static function exibirPublicamenteEstatico(){
        echo "<br>Static: ".self::$estatico;
    }
}

$a = new A();

$a->exibirPublicamente();
$a->exibirPublicamenteEstatico(); // Não é a forma correta

echo '<br>'.A::$estatico;