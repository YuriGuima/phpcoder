<div class="titulo">Membros<div>

<?php

class ArcoFlecha {

    private $qtdflechas = 15;

    function atirar()
    {
        if($this->qtdflechas == 0){
            echo '...';
        }else{
            $this->qtdflechas--;
            echo 'Schuap! ---><br>';
        }
    }

    public function armazenarFlechas(int $qtdflechas)
    {
        if(($this->qtdflechas + $qtdflechas) > 20){
            $this->qtdflechas = 20;
            echo "Só tenho espaço para <strong>20<strong> flechas<br>";
        }else{
            $this->qtdflechas += $qtdflechas;
            echo $this->mostrarQtd();
        }
    }

    public function mostrarQtd()
    {
        return "Restam <strong>$this->qtdflechas</strong> flechas<br>";
    }

}

$gavigod = new ArcoFlecha;

echo $gavigod->mostrarQtd();
$gavigod->atirar();
$gavigod->atirar();
echo $gavigod->mostrarQtd();
$gavigod->armazenarFlechas(10);