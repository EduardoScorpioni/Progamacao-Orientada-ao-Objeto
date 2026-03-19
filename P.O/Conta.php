<?php
class Conta{
    //declaração de atributos
    public  $numero;
    public  $titular;
    public  $saldo;
   
     //declaração de metodos
     public function MostrarDados(){
        echo "Numero: ".$this->numero." titular: ".$this->titular." Saldo: ".$this->saldo;
     }
     public function Sacar(){
        //$this->saldo = $this-> saldo - $valorSaque;
        $this->saldo -= $valorSaque;   
     }
     public function Depositar(){

     }

}
$c1 = new Conta(); //intancia o o objeto
$c1->numero = 10;
$c1->titular ="fatec";
$c1->saldo = 100;
$c1->MostrarDados();
$c1->Sacar(15);
$c1->MostrarDados();


?>