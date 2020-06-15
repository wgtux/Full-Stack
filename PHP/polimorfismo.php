<?php

interface Forma{
    public function getArea();
    public function getTipo();
}

class Cirulo implements Forma{
    private $raio;

    public function __construct($r){
        $this->$raio = $r;
    }

    public function getArea(){
        return Pi() * ($this->$raio * $this->$raio);
    }

    public function getTipo(){
        return "Cirulo";
    }
}

class Quadrado implements Forma{
    private $largura;
    private $altura;

    public function __construct($l, $a){
        $this->$largura = $l;
        $this->$altura = $a;
    }

    public function getArea(){
        return $this->$largura * $this->$altura;
    }

    public function getTipo(){
        return "Quadrado";
    }
}

$quadrado = new Quadrado(5,5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

foreach($objetos as $objeto){
    $tipo = $this->getTipo();
    $area = $this->getArea();

echo "AREA ".$tipo." : ".$area."<br>";
}
