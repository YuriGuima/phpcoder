<div class="titulo">Conversões</div>

<?php
echo 'Int para Float <br>';
var_dump(PHP_INT_MAX + 1); // Número máximo em inteiro + 1 = float
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';
echo '<br>';

echo 'Float para Int <br>';
var_dump((int) 1.3);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump(round(2.8));

