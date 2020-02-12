<div class="titulo">For<div>

<?php

for($i = 0;$i < 5;$i++){
    for($j = 0;$j < 5;$j++){
        
        echo $i == $j || $i + $j == 4 ? '<span style="color:rgb(50, 119, 209);padding:0px 25px">X</span>' : '<span style="padding:0px 25px">O</span>';       
    
    }
    echo "<br>";
}