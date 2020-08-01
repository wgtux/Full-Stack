<?php

class Calculadora{

    public float $num = 0;

    //metodos
    public function add(float $n){
        $this->num += $n;
    }

    public function sub(float $n){
        $this->num -= $n;
    }

    public function mult(float $n){
        $this->num *= $n;
    }

    public function divide(float $n){
        $this->num /= $n;
    }

    public function total(){
        return $this->num;
    }

    public function clear(){
        $this->num = null;
    }
}

?>