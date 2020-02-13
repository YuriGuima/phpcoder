<div class="titulo">Argumento Padrão<div>

<?php

function ordemDoImperio($imperador = 'Palpatine',$comandante = 'Darth Vader',...$exercito){
    echo "<hr><h3 id='teste'>Imperador: $imperador</h3><br>Comandante: $comandante";

    echo '<ol>';
    foreach($exercito as $soldado){
        echo "<li>Soldado: $soldado</li>";
    }
    echo '</ol>';

}


$exercito = array('Stormtropper','Stormtropper','Stormtropper','Stormtropper');
echo ordemDoImperio('Supremo','Fantástico',...$exercito);

?>

<!-- <script>

var x = document.getElementById('teste');

x.addEventListener('mouseover',function(){
    x.style.color = 'red';
},false);

x.addEventListener('mouseleave',function(){
    x.style.color = 'black';
},false);

</script> -->