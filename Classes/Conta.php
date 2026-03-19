<?php

class Conta{
    //declaração dos atributos
    public $num;
    public $titular;
    public $saldo; //int
    //declaração dos métodos - funções
    public function mostrarAtributos(){
        echo"Número:".$this->num."<br>Titular:".$this->titular."<br>Saldo:".$this->saldo;    

    }
    public function sacar(){
    //aqui vc saca o pau

    }
    public function depositar(){
    // aqui vc deposita o pau no cu

    }

}
//instanciar objeto
$c1 = new Conta();
$c1->num = 10; 
$c1->titular = "Eduardo";
$c1->saldo = 100000.11;
$c1->mostrarAtributos();

?>