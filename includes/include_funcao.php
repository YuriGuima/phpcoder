<div class="titulo">Include Função</div>

<?php

echo "Carregando: include_funcao<br>";

function carregarArquivo() {
    include('include_arquivo.php');
    echo $variavel.'<br>';
    echo soma(5,5);
}

carregarArquivo();

echo '<br>Novamente no arquivo include_funcao<br>';
echo soma(5,5);