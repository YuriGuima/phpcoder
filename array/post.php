<div class="titulo">$_POST<div>

<!-- form[action=#][method=post]>input[type=text][name=nome]+input[type=text][name=sobrenome]+button{Enviar} -->
<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="sexo" id="">
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
    </select>
    <button style="cursor: pointer;">Enviar</button>
</form>

<style>
    form > * { 
        font-size: 1.8rem; 
    }
</style>

<?php
echo "<h3 style='color:rgb(50, 119, 209)'>".strtoupper(join($_POST,' - '))."</h3>";
echo var_dump($_POST);

