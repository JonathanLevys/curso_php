<?php 

class PlantaBaixa {
    public $comprimento;
    public $largura;
    public $cor;

    public function __construct()
    {
        $this->comprimento = "4m";
        $this->largura = "9m";
        $this->cor = "rosa";
    }

    public function abrirPorta() {
        echo "Abriu a porta";
    }

    public function abrirJanela() {
        echo "Abriu a janela";
    }

    public function mostrarCaracteristicas() {
        echo "Comprimento: " . $this->comprimento . "</br>";
        echo "Largura: " . $this->largura . "</br>";
        echo "Cor: " . $this->cor . "</br>";
    }
}

$casa = new PlantaBaixa();
$casa->mostrarCaracteristicas();
$casa->abrirPorta();