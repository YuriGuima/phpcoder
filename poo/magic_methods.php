<div class="titulo">Métodos Mágicos</div>

<?php

class Magic {

    public $name;

    public function getName(){
        return $this->name;
    }

    public function setName($newName){
        $this->name = $newName;
    }


    public function __set($methodName,$atribute){
        echo "$atribute - There are no method with his name";
    }

    public function __get($atribute){
        echo 'There are no methods with that name';
    }

    public function __call($method,$otherThing){
        echo "There are no method with that name $method";
    }

}

$potter = new Magic();
$potter->setName('Potter');
$potter->$nome = 'Harry';

echo '<br>'.$potter->getName().'<br>';
echo $potter->nome.'<br>';

$potter->qlqcoisa();