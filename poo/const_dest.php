<div class="titulo">Construtor e Destrutor<div>

<style>

.success {
    color: green;
}

.error {
    color: red;
}

</style>

<?php

class Person{

    private $name;
    private $age;

    function __construct($name = 'Undefined',$age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($newName) {
        $this->name = $newName;
        echo '<br>', strcmp($this->name,$newName) == 0 ? '<span class="success">Name updated!</span>' : '<span class="error">Error in update!</span>';
    }

    public function setAge(int $newAge) {
        $this->age = $newAge;
        echo '<br>', $this->age == $newAge ? '<span class="success">Age updated!</span>' : '<span class="error">Error in update!</span>';
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getPerson() {
        return "<hr>Nome: {$this->getName()} | Idade: {$this->getAge()}";
    }

    function __destruct() {
        echo '<br>Adios amigo!';
    }

}

$person1 = new Person('Yuri',21);
echo $person1->getPerson();

$person2 = new Person();
echo $person2->getPerson();

$person2->setName('Laura');
$person2->setAge(22);
echo $person2->getPerson();

unset($person1);
