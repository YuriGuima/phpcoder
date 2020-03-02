<div class="titulo">Lendo Arquivo<div>

<?php
$arquivo = fopen('teste.txt','r');
echo fread($arquivo,27);
echo '<br>';
echo fread($arquivo,30);

echo '<hr>';

$arquivo = fopen('teste.txt','r');
$size = filesize('teste.txt');
echo 'Tamanho: '.$size.'<br>'.fread($arquivo,$size);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt','r');
echo fgets($arquivo).'<br>';
echo fgets($arquivo).'<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt','r');
while(!feof($arquivo)){
    echo fgets($arquivo).'<br>';
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt','r');
while(!feof($arquivo)){
    echo fgetc($arquivo);
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt','r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdding while reading");
fclose($arquivo);

echo "The End!";

