<div class="titulo">Array<div>

<?php

$array = array(1,2,3,4,5,'Teste',array('a','b','c'));

echo join($array[6],', ');

echo "<br>";
var_dump($array);

echo "<br>";

$x = array("name" => "Yuri", "idade" => 21);

$x[] = 'Uau';

echo "<br>";
echo join($x,', ');
echo "<br>";

unset($x["idade"]);
echo join($x,', ');

echo "<br>";
echo count($x); // Função Length
echo "<br>";
