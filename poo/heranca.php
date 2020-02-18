<div class="titulo">Herança<div>

<?php

class Person {

    protected $name;
    protected $age;

    function __construct($newName, $newAge){
        $this->name = $newName;
        $this->age = $newAge;
    }

    function hello(){
        return "Name: {$this->name}, Age: {$this->age}";
    }

}

class User extends Person {

    private $login;

    function __construct($name,$age,$login){
        parent::__construct($name,$age);
        $this->login = $login;
    }

    function hello(){
        return "Login: {$this->login} | ".parent::hello();
    }

}

$darth = new Person('Vader',38);
echo 'Person - '.$darth->hello().'<br>';

$skywalker = new User('Luke',21,'sky_walker');
echo 'User - '.$skywalker->hello().'<br>';